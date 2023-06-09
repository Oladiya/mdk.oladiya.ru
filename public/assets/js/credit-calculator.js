console.log(`test2.js connected successfully`);

function calculatePayment() {
    let amountOfCredit = document.getElementById('amountOfCredit').value;
    let downPayment = document.getElementById('downPayment').value;
    let years = document.getElementById('years').value;
    let interestRate = document.getElementById('interestRate').value / 100;
    let payPerYear = document.getElementById('payPerYear').value;
    console.log(`${amountOfCredit}, ${downPayment}, ${years}, ${interestRate}, ${payPerYear}`);

    let loanBalance = amountOfCredit - downPayment;
    let monthlyPayment = interestRate * loanBalance / payPerYear / (1 - Math.pow((interestRate / payPerYear) + 1, payPerYear * -3));
    monthlyPayment = Math.round(monthlyPayment * 100) / 100;
    console.log(monthlyPayment);
    document.getElementById('Payment').value = monthlyPayment;

    return monthlyPayment;
}

function buildPaymentScheme() {
    let years = document.getElementById('years').value;
    let amountOfCredit = document.getElementById('amountOfCredit').value;
    let downPayment = document.getElementById('downPayment').value;
    let interestRate = document.getElementById('interestRate').value / 100;
    let payPerYear = document.getElementById('payPerYear').value;
    let monthlyPayment = calculatePayment();
    let loanBalance = (amountOfCredit - downPayment);
    let netMonthlyPayments = [];
    let interest = [];
    let monthlyPayments = [];

    for (let i = 0; i < years * payPerYear; i++) {
        interest[i] = loanBalance * (interestRate / payPerYear);
        interest[i] = Math.round(interest[i] * 100) / 100;
        if(i === (years * payPerYear) - 1 ){
            netMonthlyPayments[i] = loanBalance;
        } else {
            netMonthlyPayments[i] = monthlyPayment - interest[i];
        }
        netMonthlyPayments[i] = Math.round(netMonthlyPayments[i] * 100) / 100;
        monthlyPayments[i] = netMonthlyPayments[i] + interest[i];
        monthlyPayments[i] = Math.round(monthlyPayments[i] * 100) / 100
        loanBalance -= netMonthlyPayments[i];
    }
    console.log(netMonthlyPayments);
    console.log(interest);
    let out = document.getElementById('out');
    out.innerHTML = "<tr><th>Период</th><th>Основной платёж</th><th>Платёж по %</th><th>Общая сумма за период</th></tr>";
    let netPayment = 0;
    let interestPayment = 0;
    let allPayment = 0;
    for (let i = 0; i < interest.length; i++) {
        out.innerHTML += `<tr><td>${i + 1}</td><td>${netMonthlyPayments[i]}</td><td>${interest[i]}</td><td>${monthlyPayments[i]}</td></tr>`;
        netPayment += netMonthlyPayments[i];
        interestPayment += interest[i];
        allPayment += monthlyPayments[i];
    }
    out.innerHTML += `<tr><td>Итого:</td><td>${netPayment.toFixed(2)}</td><td>${interestPayment.toFixed(2)}</td><td>${allPayment.toFixed(2)}</td></tr>`;
}

