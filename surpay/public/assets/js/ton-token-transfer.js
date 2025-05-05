#!/usr/bin/env node

const tonweb = new TonWeb();

dotenv.config();

const mnemonicStr = process.env.TON_WALLET_MNEMONIC;
const recipientAddress = process.argv[2];

if (!mnemonicStr) {
    console.error("❌ MNEMONIC не задана в .env");
    process.exit(1);
}

if (!recipientAddress) {
    console.error("❌ Адрес получателя не указан");
    process.exit(1);
}

async function sendJetton() {
    const client = new TonClient({
        endpoint: 'https://mainnet.toncenter.com/api/v2/jsonRPC',
        apiKey: process.env.TONCENTER_API_KEY || ''
    });

    const mnemonic = mnemonicStr.split(' ');
    const keyPair = await mnemonicToWalletKey(mnemonic);

    const wallet = WalletContractV4.create({ publicKey: keyPair.publicKey, workchain: 0 });
    const contract = client.open(wallet);

    const seqno = await contract.getSeqNo();

    console.log('📤 Отправка транзакции...');
    await contract.sendTransfer({
        secretKey: keyPair.secretKey,
        seqno,
        messages: [
            wallet.createJettonTransfer({
                seqno,
                jettonMaster: new Address(process.env.JETTON_MASTER_ADDRESS),
                amount: 7540000n, // 7.54 SUR, если 1 SUR = 1e6
                to: new Address(recipientAddress),
                responseAddress: contract.address,
            }),
        ],
    });

    console.log('✅ Транзакция успешно отправлена');
}

sendJetton().catch((err) => {
    console.error('❌ Ошибка:', err.message);
    process.exit(1);
});
