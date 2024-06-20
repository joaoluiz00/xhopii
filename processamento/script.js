// script.js
const products = [
    {
        name: "Produto 1",
        description: "Descrição do Produto 1",
        price: "R$ 100,00",
        imageUrl: "../img/produto1.png",
        qtde: "200 unidades",
        link: "produto1.html"
    },
    {
        name: "Produto 2",
        description: "Descrição do Produto 2",
        price: "R$ 200,00",
        imageUrl: "../img/produto2.png",
        qtde: "200 unidades",
        link: "produto2.html"
    },
    {
        name: "Produto 3",
        description: "Descrição do Produto 3",
        price: "R$ 300,00",
        imageUrl: "../img/produto3.png",
        qtde: "200 unidades",
        link: "produto3.html"
    },
    {
        name: "Produto 4",
        description: "Descrição do Produto 4",
        price: "R$ 400,00",
        imageUrl: "../img/produto4.png",
        qtde: "200 unidades",
        link: "produto4.html"
    },
    {
        name: "Produto 5",
        description: "Descrição do Produto 5",
        price: "R$ 500,00",
        imageUrl: "../img/produto5.png",
        qtde: "200 unidades",
        link: "produto5.html"
    },
    {
        name: "Produto 6",
        description: "Descrição do Produto 6",
        price: "R$ 600,00",
        imageUrl: "../img/produto1.png",
        qtde: "200 unidades",
        link: "produto6.html"
    },
    {
        name: "Produto 7",
        description: "Descrição do Produto 7",
        price: "R$ 700,00",
        imageUrl: "../img/produto2.png",
        qtde: "200 unidades",
        link: "produto7.html"
    },
    {
        name: "Produto 8",
        description: "Descrição do Produto 8",
        price: "R$ 800,00",
        imageUrl: "../img/produto3.png",
        qtde: "200 unidades",
        link: "produto8.html"
    },
    {
        name: "Produto 9",
        description: "Descrição do Produto 9",
        price: "R$ 900,00",
        imageUrl: "../img/produto4.png",
        qtde: "200 unidades",
        link: "produto9.html"
    },
    {
        name: "Produto 10",
        description: "Descrição do Produto 10",
        price: "R$ 1000,00",
        imageUrl: "../img/produto5.png",
        qtde: "200 unidades",
        link: "produto10.html"
    }
];

function loadProducts() {
    const productGrid = document.getElementById('productGrid');

    products.forEach(product => {
        const productElement = document.createElement('div');
        productElement.className = 'product';

        productElement.innerHTML = `
            <img src="${product.imageUrl}" alt="${product.name}">
            <div class="product-info">
                <h2>${product.name}</h2>
                <p>${product.description}</p>
                <p class="price">${product.price}</p>
                <p class="qtde">${product.qtde}</p>
            </div>
        `;

        productElement.addEventListener('click', () => {
            window.location.href = product.link;
        });

        productGrid.appendChild(productElement);
    });
}

document.addEventListener('DOMContentLoaded', loadProducts);
