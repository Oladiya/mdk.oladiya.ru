<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Реализация алгоритмов обработки числовых данных. Отладка приложения</title>
    <link rel="stylesheet" href="{{asset('assets/css/credit-calculator.css')}}">
</head>
<body>
    <div class="container">
        <form class="form">
            <div class="form-item">
                <label for="amountOfCredit">Цена покупки</label>
                <input type="number" id="amountOfCredit" name="amountOfCredit" value="300000">
            </div>
            <div class="form-item">
                <label for="downPayment">Первоначальный платёж</label>
                <input type="number" id="downPayment" name="downPayment" value="45000">
            </div>
            <div class="form-item">
                <label for="years">Срок (лет)</label>
                <input type="number" id="years" name="years" value="3">
            </div>
            <div class="form-item">
                <label for="interestRate">Процентная ставка (%)</label>
                <input type="number" id="interestRate" name="interestRate" value="16">
            </div>
            <div class="form-item">
                <label for="payPerYear">Платежей в год</label>
                <input type="number" id="payPerYear" name="payPerYear" value="12">
            </div>
            <div class="form-item">
                <button type="button" id="submit" class="btn1" onclick="calculatePayment();">Вычислить платёж за период</button>
                <input type="text" id="Payment" name="Payment">
            </div>
            <div class="form-item">
                <button type="button" class="btn2" onclick="buildPaymentScheme();">Построить схему платежей</button>
            </div>
        </form>
        <table id="out"></table>
    </div>
    <script type="text/javascript" src="{{ asset('assets/js/credit-calculator.js') }}"></script>
</body>
</html>
