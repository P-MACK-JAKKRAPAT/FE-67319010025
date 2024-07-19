let myName : string = "jakkrapat";
let myNumber : number = 19;
console.log(myName);

function showMyAge(): void{
    myNumber--;
    //myNumber -= 1;
    //myNumber = myNumber-1;  

    console.log(myNumber);
    document.getElementById("age-data").innerHTML = String(myNumber);
}

function cal():void {
    var num1 : number;
    var num2 : number;
    var x1 : any;
    var x2 : any;
    x1 = document.getElementById("num1");
    num1 = Number(x1.value);
    x2 = document.getElementById("num2");
    num2 = Number(x1.value);
    var res : number = num1+num2;
    document.getElementById("age-data").innerHTML = String(res);
}
