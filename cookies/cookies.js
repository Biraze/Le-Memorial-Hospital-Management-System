window.onload = function() {
    if (document.cookie.length != 0){
        console.log("We have cookies!")
    }
}

function SetLoginCookie(){
    const key = document.getElementById('key').value;
    const password = document.getElementById('password').value;

    document.cookie = "key" +key+ ";" +"expires = Fri, 5 May 2023 01:00:00 UTC"
    document.cookie = "password" +password+ ";" +"expires = Fri, 5 May 2023 01:00:00 UTC"
}

// let mybtn = document.getElementById('cokbtn');

// if(mybtn){
//     mybtn.addEventListener('click', (e) => {
//      e.preventDefault();

//      let key = document.getElementById('key').value
//      let value= document.getElementById('value').value
     
//      if(key == "" || value == ""){
//          alert("Please enter all the fields")
//      }else{
//          setCookie(key,value,365)
//      }

//     })
// }
// document.getElementById('cform').addEventListener('submit',(e) =>{
//     e.preventDefault()
    
   
// })

// function setCookie(key,value,time){
//    //get the current time
//     let d = new Date()
//     d.setTime(d.getTime() + (time*24*60*60*1000))

//     let expires = "expires=" +d.toUTCString();

//     document.cookie = `${key}=${value};${expires};path='../cookies.html'`
// }




// Auto Login System in JS with Cookies.

// cname: Cookie name
// function getCookie(cname) {
//   var name = cname + "=";
//   var decodedCookie = decodeURIComponent(document.cookie);
//   var ca = decodedCookie.split(';');
//   for(var i = 0; i <ca.length; i++) {
//     var c = ca[i];
//     while (c.charAt(0) == ' ') {
//       c = c.substring(1);
//     }
//     if (c.indexOf(name) == 0) {
//       return c.substring(name.length, c.length);
//     }
//   }
//   return "";
// }


// cname: cookie Name
// cvalue: Value to be stored in cookie
// Exdays: Expiry days for cookie, use 30 if you don’t have any idea.
// function setCookie(cname, cvalue, exdays) {
//   var d = new Date();
//   d.setTime(d.getTime() + (exdays*24*60*60*1000));
//   var expires = "expires="+ d.toUTCString();
//   document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
// }
