

let balance = {
    "balance1": 2000,
    
    "balance2": 500,
}
selectedAccount = 1;





let balanceChanged = () => {
    console.log("Balance changed");

   

    let balanceElement1 = document.getElementById("balance1");
    balanceElement1.innerHTML = `Balance: $${balance.balance1}`;

    let balanceElement2 = document.getElementById("balance2");
    balanceElement2.innerHTML = `Balance: $${balance.balance2}`;
}

let sendMoney = (amount) => {

    


    if (selectedAccount == 1) {
       balance.balance1 = 0;
       
    } else {
        balance.balance1 += amount;
      
    }
    balanceChanged();
}


let account = document.getElementById("account");
account.addEventListener("change", (event) => {
    selectedAccount = event.target.value;
    selectedAccount = parseInt(selectedAccount);
    console.log(selectedAccount);
}
)



//balanceChanged();
