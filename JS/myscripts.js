const nav = document.getElementById("topNav");
const main = document.getElementById("main");
const menu = document.getElementsByClassName("menuitems");
const close = document.getElementById("closebtn");

document.getElementById("checkbox").addEventListener("click", dayswitch);

const hr = document.getElementsByTagName("hr");
const textbox = document.querySelector(".textbox");
const text = document.querySelectorAll("H1, H2, H3, H4, H5, H6, a, .vl");
const punt = document.querySelector(".punt");
const punt2 = document.querySelector(".punt2");
const header = document.querySelector(".Header");
const navigation = document.querySelector(".navigation");
const navigationl = document.querySelector(".menulist");
const navigationText = document.querySelectorAll(".menuitems");
const menubutton = document.querySelectorAll(".line1, .line2, .line3");
const contactbutton = document.querySelector(".button");
const contact = document.querySelector(".Contact");
const contactForm = document.querySelector(".Contact-form");
const contactinput = document.querySelectorAll("#name, #surname, #email, #need, #message");
const muted = document.querySelector(".text-mute");
const talen = document.querySelector("#Talen");
const beroepen = document.querySelectorAll(".beroepen");
const p2a = document.querySelectorAll(".p2a");
const p2b = document.querySelectorAll(".p2b");
const list = document.querySelectorAll(".Project-list");
let count = 0;

const today = new Date();
const time = today.getHours();
if(time>=18 || time<=6 || localStorage.getItem("isDay")=="nacht"){
	localeStorageCell();
	document.getElementById("checkbox").checked = true;
}
function localeStorageCell(){

	if(count==1){
		document.body.style.backgroundColor = "";
		for(let i = 0; i<hr.length; i++){
			hr[i].style.borderColor = "";
		}
		count = 0;
	}
	else{
		document.body.style.backgroundColor = "black";
		for(let i = 0; i<hr.length; i++){
			hr[i].style.borderColor = "white";
		}
		count++;
	}
	if(punt){punt.classList.toggle("TableDark");}
	if(punt2){punt2.classList.toggle("TableDark");}
	if(textbox){textbox.classList.toggle("BGdark");}
	if(header){header.classList.toggle("BGBlack");}
	if(navigation){navigation.classList.toggle("BGBlack");}
	if(navigationl){navigationl.classList.toggle("BGBlack");}
	if(contactbutton){contactbutton.classList.toggle("BGdark")}
	if(contact){contact.classList.toggle("BGdark")}
	if(contactForm){contactForm.classList.toggle("contactFormDark")}
	if(muted){muted.classList.toggle("Tdark");}
	if(talen){talen.classList.toggle("talenDark");}

	for(let i = 0; i<text.length; i++){
		if(text[i]){text[i].classList.toggle("Tdark");}
	}

	for(let i = 0; i<navigationText.length; i++){
		navigationText[i].style.borderColor = "white";
	}

	for(let i = 0; i<navigationText.length; i++){
		if(navigationText[i]){navigationText[i].classList.toggle("Tdark");}
		if(navigationText[i]){navigationText[i].classList.toggle("vdark");}	
	}
	
	for(let i = 0; i<menubutton.length; i++){
		if(menubutton[i]){menubutton[i].classList.toggle("lineDark");}	
	}

	for(let i = 0; i<contactinput.length; i++){
		if(contactinput[i]){contactinput[i].classList.toggle("contactFormInput");}	
	}

	for(let i = 0; i<beroepen.length; i++){
		if(beroepen[i]){beroepen[i].classList.toggle("beroepenDark");}
	}

	for(let i = 0; i<p2a.length; i++){
		if(p2a[i]){p2a[i].classList.toggle("p2aDark");}
	}

	for(let i = 0; i<p2b.length; i++){
		if(p2b[i]){p2b[i].classList.toggle("p2bDark");}
	}

	for(let i = 0; i<list.length; i++){
		if(list[i]){list[i].classList.toggle("Project-list-Dark");}
	}
}

function dayswitch(){

	if(localStorage.getItem("isDay")=="nacht"){
		localStorage.setItem("isDay", "dag");
	}
	else{
		localStorage.setItem("isDay", "nacht");
	}
	if(count==1){
		document.body.style.backgroundColor = "";
		for(let i = 0; i<hr.length; i++){
			hr[i].style.borderColor = "";
		}
		count = 0;
	}
	else{
		document.body.style.backgroundColor = "black";
		for(let i = 0; i<hr.length; i++){
			hr[i].style.borderColor = "white";
		}
		count++;
	}

	if(punt){punt.classList.toggle("TableDark");}
	if(punt2){punt2.classList.toggle("TableDark");}
	if(textbox){textbox.classList.toggle("BGdark");}
	if(header){header.classList.toggle("BGBlack");}
	if(navigation){navigation.classList.toggle("BGBlack");}
	if(navigationl){navigationl.classList.toggle("BGBlack");}
	if(contactbutton){contactbutton.classList.toggle("BGdark")}
	if(contact){contact.classList.toggle("BGdark")}
	if(contactForm){contactForm.classList.toggle("contactFormDark")}
	if(muted){muted.classList.toggle("Tdark");}
	if(talen){talen.classList.toggle("talenDark");}

	for(let i = 0; i<text.length; i++){
		if(text[i]){text[i].classList.toggle("Tdark");}
	}

	for(let i = 0; i<navigationText.length; i++){
		navigationText[i].style.borderColor = "white";
	}

	for(let i = 0; i<navigationText.length; i++){
		if(navigationText[i]){navigationText[i].classList.toggle("Tdark");}
		if(navigationText[i]){navigationText[i].classList.toggle("vdark");}	
	}
	
	for(let i = 0; i<menubutton.length; i++){
		if(menubutton[i]){menubutton[i].classList.toggle("lineDark");}	
	}

	for(let i = 0; i<contactinput.length; i++){
		if(contactinput[i]){contactinput[i].classList.toggle("contactFormInput");}	
	}

	for(let i = 0; i<beroepen.length; i++){
		if(beroepen[i]){beroepen[i].classList.toggle("beroepenDark");}
	}

	for(let i = 0; i<p2a.length; i++){
		if(p2a[i]){p2a[i].classList.toggle("p2aDark");}
	}

	for(let i = 0; i<p2b.length; i++){
		if(p2b[i]){p2b[i].classList.toggle("p2bDark");}
	}

	for(let i = 0; i<list.length; i++){
		if(list[i]){list[i].classList.toggle("Project-list-Dark");}
	}
}


//default to measure if/else from
nav.style.height = "50px";
main.style.marginTop = "50px";
for (i = 0; i < menu.length; i++){menu[i].style.marginTop="100px";};

close.addEventListener("click", function(){
  let menuIcon = close.children;
  for (i = 0; i < menuIcon.length; i++){
  menuIcon[i].classList.toggle("active");
  }   
});

function navToggle() {	
	//to close
	if (nav.style.height <= "275px") {
	nav.style.height = "50px";
	main.style.marginTop = "50px";
	
	let i = 0;
    	for (i = 0; i < menu.length; i++){
	menu[i].style.opacity="0.0";    
	menu[i].style.marginTop="100px";
	};
		if(count == 0){
			document.body.style.backgroundColor = "rgba(0,0,0,0.0)";
		}
		else{
			document.body.style.backgroundColor = "black";
		}
    	
	
	} 
	//to open
	else if (nav.style.height <= "50px") {
	nav.style.height = "275px";
	main.style.marginTop = "275px";
    	var i = 0;
    	for (i = 0; i < menu.length; i++){
	menu[i].style.opacity="1.0";
	menu[i].style.marginTop="0px";
	};
    	document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
	
	}

};

function validateName() {
	const name = document.getElementById('name').value;
	if(name.length == 0) {
	  return false;

	}
	//if (!name.match(/^[a-zA-Z]{3,}(?: [a-zA-Z]+){0,2}$/)) {
	 // alert("Please enter your correct name") ;//Validation Message
	 // return false;
//	}
	return true;
  }

  function validateSurname() {
	const surname = document.getElementById('surname').value;
	if(surname.length == 0) {
	  return false;
	}
   	return true;
 }

 function validateEmail () {

  const email = document.getElementById('email').value;
  if(email.length == 0) {
	return false;

  }
  if(!email.match(/^[A-Za-z\._\-[0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/)) {
	alert("Please enter a correct email address") ;//Validation Message
	return false;
  }
  return true;

}

function validateNeed() {
	const need = document.getElementById('need').value;
	if(need.length == 0) {
	  return false;
	}

   	return true;
 }

 function validateMessage() {
	const message = document.getElementById('message').value;
	if(message.length == 0) {
	  return false;
	}
	
   	return true;
 }


function validateForm() {
  if (!validateName() || !validateSurname() || !validateEmail() || !validateNeed() || !validateMessage()) {

	//document.querySelector(".alert-error").style.display = "block";
	//setTimeout(deleteError, 1000)
  }
  else {
	document.querySelector(".alert-success").style.display = "block";
	setTimeout(deleteForm, 3000)
  }
}

function deleteError(){
	document.querySelector(".alert-error").style.display = "none";
}

function deleteForm(){
	document.getElementById("myForm").reset();
	document.querySelector(".alert-success").style.display = "none";
}

        
function dis(val)
{
    document.getElementById("result").value+=val
}

let shiftIsUp = false;



         function solve()
         {
             let x = document.getElementById("result").value
             let y = eval(x)
             document.getElementById("result").value = y
         }
           
         function clr()
         {
             document.getElementById("result").value = ""
         }

         document.addEventListener('keydown', logKey);

         function logKey(e) {
            

             if(e.code=="Slash"){
                 document.getElementById("result").value+="/"
             }
             else if(e.code=="Escape"){
                clr()
             }
             else if(e.code=="Minus"){
                 document.getElementById("result").value+="-"
             }
             else if(e.code=="Equal"){
                 solve();
             }
             else if(e.code=="Enter"){
                solve();
            }
            else if(e.code=="Period"){
                document.getElementById("result").value+="."
            }
            else if(e.code=="Backspace"){
                var str= document.getElementById("result").value;
                var newStr = str.substring(0, str.length - 1);
                document.getElementById("result").value=newStr
            }
             else if(e.code=="Digit1"){
                 document.getElementById("result").value+=1
             }
             else if(e.code=="Digit1"){
                 document.getElementById("result").value+=1
             }
             else if(e.code=="Digit2"){
                 document.getElementById("result").value+=2
             }
             else if(e.code=="Digit3"){
                 document.getElementById("result").value+=3
             }
             else if(e.code=="Digit4"){
                 document.getElementById("result").value+=4
             }
             else if(e.code=="Digit5"){
                 document.getElementById("result").value+=5
             }
             else if(e.code=="Digit6"){
                 document.getElementById("result").value+=6
             }
             else if(e.code=="Digit7"){
                 document.getElementById("result").value+=7
             }
             else if(e.code=="Digit8"){
                 document.getElementById("result").value+=8
             }
             else if(e.code=="Digit9"){
                 document.getElementById("result").value+=9
             }
             else if(e.code=="Digit0"){
                 document.getElementById("result").value+=0
             }
           }