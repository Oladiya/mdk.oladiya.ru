let orderItems = 0;
// PA - global pizza attributes
let PA = [
    ['small_', 'medium_', 'large_'],
    ['standard_', 'thin_'],
    ['price', 'weight', 'calories', 'proteins', 'fats', 'carbohydrates']
];

function addToOrder(type, id) {
    if (type === 'pizza') {
        let find;
        order['pizzas'].forEach(function (pizza, index, array) {
            if (pizza['id'] === id && pizza['size'] === 1 && pizza['doughType'] === 1) {
                order['pizzas'][index]['amount']++;
                find = true
            }
        })
        if (!find) {
            order['pizzas'][orderPizzas] = {
                'id': id,
                'size': 1,
                'doughType': 1,
                'amount': 1,
            };
            orderPizzas++;
        }
        renderOrder();
    }
}

function renderOrder() {
    let orderHTML = document.getElementById('order');
    let orderHTMLString = '';
    let totalPrice = 0;
    orderHTML.innerHTML = '';
    order['pizzas'].forEach(function (pizza, index, array) {
        let pizzaAttributes = {};
        pizzaAttributes['price'] = products['pizzas'][pizza['id']][PA[0][pizza['size'] - 1] + PA[1][pizza['doughType'] - 1] + PA[2][0]];
        pizzaAttributes['price'] *= pizza['amount'];
        totalPrice += pizzaAttributes['price'];
        pizzaAttributes['weight'] = products['pizzas'][pizza['id']][PA[0][pizza['size'] - 1] + PA[1][pizza['doughType'] - 1] + PA[2][1]];
        pizzaAttributes['calories'] = products['pizzas'][pizza['id']][PA[0][pizza['size'] - 1] + PA[1][pizza['doughType'] - 1] + PA[2][2]];
        pizzaAttributes['proteins'] = products['pizzas'][pizza['id']][PA[0][pizza['size'] - 1] + PA[1][pizza['doughType'] - 1] + PA[2][3]];
        pizzaAttributes['fats'] = products['pizzas'][pizza['id']][PA[0][pizza['size'] - 1] + PA[1][pizza['doughType'] - 1] + PA[2][4]];
        pizzaAttributes['carbohydrates'] = products['pizzas'][pizza['id']][PA[0][pizza['size'] - 1] + PA[1][pizza['doughType'] - 1] + PA[2][5]];
        let sizeNames = [
            '25 см',
            '30 см',
            '35 см',
        ];
        let doughTypeNames = [
            'традиционное',
            'тонкое',
        ]
        pizzaAttributes['size'] = sizeNames[pizza['size'] - 1];
        pizzaAttributes['doughType'] = doughTypeNames[pizza['doughType'] - 1];
        orderHTMLString +=
            `<div class="order_item">
                <input  type="text" name="pizzas[${index}][id]" value="${pizza['id']}">
                <input  type="text" name="pizzas[${index}][amount]" value="${pizza['amount']}">
                <input  type="text" name="pizzas[${index}][size]" value="${pizza['size']}">
                <input  type="text" name="pizzas[${index}][doughType]" value="${pizza['doughType']}">
                <input  type="text" name="pizzas[${index}][price]" value="${pizzaAttributes['price']}">
                <div>
                <p class="pizza_name">${products['pizzas'][pizza['id']]['name']}</p>
                количество - <button class="button_plus" onclick="orderItemPlus('pizzas', ${index}, 1)">+</button> ${pizza['amount']} <button class="button_plus" onclick="orderItemPlus('pizzas', ${index}, -1)">-</button>`
        orderHTMLString += `<div class="selectable_list">`;
        for (let size = 1; size <= 3; size++) {
            let sizes = {1: 'маленькая', 2: 'средняя', 3: 'большая'}
            if (size == pizza['size']) {
                orderHTMLString += `<button class="selected_button">${sizes[size]}</button>`;
            } else {
                orderHTMLString += `<button class="unselected_button" onclick="setPizzaSize(${index}, ${size})">${sizes[size]}</button>`;
            }
        }
        orderHTMLString += `</div><div class="selectable_list">`
        if (pizza['doughType'] == 1) {
            orderHTMLString += `<button class="selected_button">Традиционное</button>`;
        } else {
            orderHTMLString += `<button class="unselected_button" onclick="setPizzaDoughType(${index}, 1)">Традиционное</button>`;
        }
        if (pizza['size'] == 1) {
            orderHTMLString += `<button class="disabled_button">Тонкое</button>`;
        } else {
            if (pizza['doughType'] == 2) {
                orderHTMLString += `<button class="selected_button">Тонкое</button>`;
            } else {
                orderHTMLString += `<button class="unselected_button" onclick="setPizzaDoughType(${index}, 2)">Тонкое</button>`;
            }
        }
        orderHTMLString += `</div>`
        orderHTMLString += `<p class="pizza_price">${pizzaAttributes['price']}</p>
            </div>
            <div>
                <table>
                    <caption>Информация о пицце</caption>
                    <tr>
                        <td>Диаметр</td>
                        <td>${pizzaAttributes['size']}</td>
                    </tr>
                    <tr>
                        <td>Тесто</td>
                        <td>${pizzaAttributes['doughType']}</td>
                    </tr>
                    <tr>
                        <td>Вес</td>
                        <td>${pizzaAttributes['weight']} г</td>
                    </tr>
                    <tr>
                        <td>Энерг. ценность</td>
                        <td>${pizzaAttributes['calories']} ккал</td>
                    </tr>
                    <tr>
                        <td>Белки</td>
                        <td>${pizzaAttributes['proteins']}</td>
                    </tr>
                    <tr>
                        <td>Жиры</td>
                        <td>${pizzaAttributes['fats']}</td>
                    </tr>
                    <tr>
                        <td>Углеводы</td>
                        <td>${pizzaAttributes['carbohydrates']}</td>
                    </tr>
                </table>
            </div>`

        orderHTMLString += `</div>`;
        orderHTML.innerHTML = orderHTMLString;
    });
    if(totalPrice === 0){
        orderHTML.innerHTML = '';
    } else {
        orderHTML.innerHTML += `<p class="pizza_price">${totalPrice}</p>`;
    }
}

function orderItemPlus(type, index, value) {
    order[type][index]['amount'] += value;
    if (order[type][index]['amount'] <= 0) {
        delete order[type][index];
    }
    renderOrder();
}

function setPizzaSize(index, value) {
    order['pizzas'][index]['size'] = value;
    if (value === 1) {
        order['pizzas'][index]['doughType'] = 1;
    }
    renderOrder();
}

function setPizzaDoughType(index, value) {
    order['pizzas'][index]['doughType'] = value;
    renderOrder();
}

renderOrder();
