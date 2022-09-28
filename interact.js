

let balance = {
    "balance1": 5000,
    
    "balance2": 500,
}
selectedAccount = 1;





let balanceChanged = () => {
    console.log("Balance changed");

   

    let balanceElement1 = document.getElementById("account").getElementsByTagName("option");
   
    balanceElement1[0].innerHTML = `<h3> Chequing </h3> <p> Balance: $${balance.balance1} </p>`;

    balanceElement1[1].innerHTML =`<h3> Saving </h3> <p> Balance: $${balance.balance2} </p>`;;
}

let sendMoney = () => {

    let amount = document.getElementById("amount").value;
    amount = parseInt(amount);
    let email = document.getElementById("email").value;
    email = email.toLowerCase();
    let message = document.getElementById("message").value;
    let securityQuestion = document.getElementById("securityQuestion").value;
    securityQuestion = securityQuestion.toLowerCase();
    let securityAnswer = document.getElementById("securityAnswer").value;
    securityAnswer = securityAnswer.toLowerCase();

    if((securityQuestion == "") && (securityAnswer == "") || (securityQuestion && securityAnswer)){ 
    
        if( isNaN(amount) || amount <= 0){
            alert("Please enter an amount");
            return false;
        }


        if(email == "" ){
            alert("Please enter an email");
            return false;
        }

    if (amount > balance[`balance${selectedAccount}`]) {
        alert("Insufficient funds");
    }
    else{
        balance[`balance${selectedAccount}`] -= amount;

        alert(`$${amount} has been sent to ${email}`);

        document.getElementById("amount").value = "";
        document.getElementById("email").value = "";
        document.getElementById("message").value = "";
        document.getElementById("securityQuestion").value = "";
        document.getElementById("securityAnswer").value = "";
        balanceChanged();
    }

    }else{
        if(securityQuestion == ""){
            alert("Please enter a security question");
            
        }
        else if(securityAnswer == ""){
            alert("Please enter a security answer");
        }
        return false;
    }

    

  
    balanceChanged();
}


let account = document.getElementById("account");
account.addEventListener("change", (event) => {
    selectedAccount = event.target.value;
    selectedAccount = parseInt(selectedAccount);
}
)


window.onload = function(){
    balanceChanged();
}

