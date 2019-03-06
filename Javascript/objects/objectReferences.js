let myAccount = {
    name: 'Romilson',
    expenses: 0,
    income: 0
}

let addExpense = function (userAccount, amount) {
    userAccount.expenses = userAccount.expenses + amount;
    console.log(userAccount);
}
addExpense(myAccount, 2.50);
console.log(myAccount);