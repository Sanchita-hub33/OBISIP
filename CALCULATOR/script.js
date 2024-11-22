const display = document.querySelector("#display");
const buttons = document.querySelectorAll("button");

buttons.forEach((item) => {
  item.onclick = () => {
    
    if (item.id == "clear") {
      display.innerText = "";
    } else if (item.id == "backspace") {
      let string = display.innerText.toString();
      display.innerText = string.substr(0, string.length - 1);
    } else if (display.innerText != "" && item.id == "equal") {
        try{
      display.innerText = eval(display.innerText);
      
    }catch (error){
        display.innerText = "Error!";
        setTimeout(() => (display.innerText = ""), 2000);
    }
    } else if (display.innerText == "" && item.id == "equal") {
      display.innerText = "Error!";
      setTimeout(() => (display.innerText = ""), 2000);
    } else if (item.id == "%" ){
      try{
        display.innerText = eval(display.innerText)/100;
      }catch(error){
        setTimeout(() => (display.innerText = ""), 2000);
      }
        
    }else if (item.id == "^" ){
        display.innerText =  Math.pow(eval(display.innerText), 2);   
    }else {      
      display.innerText += item.id;
    }
  };
});

