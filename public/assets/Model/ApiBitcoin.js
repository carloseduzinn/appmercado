// Arquivo: ApiBitcoin.js

const apiUrl = 'https://api.coingecko.com/api/v3/simple/price?ids=bitcoin&vs_currencies=brl';
let bitcoinPriceBRL = 0;

async function fetchAndUpdateBitcoinPrice() {
    try {
        const response = await fetch(apiUrl);

        if (!response.ok) {
            throw new Error(`Erro na solicitação: ${response.status}`);
        }

        const data = await response.json();
        bitcoinPriceBRL = data.bitcoin.brl;
        updateBitcoinPriceElement();
    } catch (error) {
        console.error(`Ocorreu um erro: ${error.message}`);
    }
}

function formatCurrency(value) {
    return new Intl.NumberFormat('pt-BR', {
        style: 'currency',
        currency: 'BRL'
    }).format(value);
}

function updateBitcoinPriceElement() {
    const formattedPrice = formatCurrency(bitcoinPriceBRL);
    const bitcoinPriceElement = document.getElementById('bitcoinPrice');
    bitcoinPriceElement.textContent = `${formattedPrice}`;
}

fetchAndUpdateBitcoinPrice();

setInterval(fetchAndUpdateBitcoinPrice, 1000);

function updateBTCPrice() {
    var produtoSelecionado = document.getElementById('itens').value;
    var precoProdutoR = parseFloat(document.getElementById('precoProdutoR').value);
    var bitcoinPriceBRL = parseFloat(document.getElementById('bitcoinPrice').textContent.replace('R$', '').replace(',', ''));

    // Verifique se o preço do Bitcoin é válido
    if (isNaN(bitcoinPriceBRL)) {
        alert('O preço do Bitcoin em BRL não é válido. Espere o Valor Aparecer.');
        return;
    }

    // Realize a conversão do preço de R$ para BTC
    var precoProdutoBTC = precoProdutoR / bitcoinPriceBRL;

    // Atualize o campo de texto do preço em BTC
    document.getElementById('precoProdutoBTC').value = precoProdutoBTC.toFixed(8); // Arredonde para 8 casas decimais
}

// Adicione um ouvinte de evento para a mudança na seleção do item
document.getElementById('itens').addEventListener('change', updateBTCPrice);
