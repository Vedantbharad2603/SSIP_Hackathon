var slide = document.getElementById("slider");
var btn1 = document.getElementById('btn1');
var btn2 = document.getElementById('btn2');
var btn3 = document.getElementById('btn3');
var btn4 = document.getElementById('btn4');

function callLogin()
{
    window.location='login_OTP.php';
}
function callthank()
{
    window.location='thank.php';
}
function callReg()
{
    window.location='registration.php';
}
function checkme()
{
    var docType = document.getElementById('docType');
    if(docType.selectedIndex!=0)
    {
        return true;
    }
    else{
        alert('Pleace select Document Type');
        return false;
    }
}
function callstud()
{
    window.location='studentHome.php';
}


// BOT

// const chatBody = document.querySelector(".chat-body");
// const txtInput = document.querySelector("#txtInput");
// const send = document.querySelector(".send");

// send.addEventListener("click", () => renderUserMessage());
// txtInput.addEventListener("keyup", (event) => {
//   if (event.keyCode === 13) {
//     renderUserMessage();
//   }
// });

// const renderUserMessage = () => {
//   const userInput = txtInput.value;
//   renderMessageEle(userInput, "user");
//   txtInput.value = "";
//   setTimeout(() => {
//     renderChatbotResponse(userInput);
//     setScrollPosition();
//   }, 600);
// };

// const renderChatbotResponse = (userInput) => {
//   const res = getChatbotResponse(userInput);
//   renderMessageEle(res);
// };

// const renderMessageEle = (txt, type) => {
//   let className = "user-message";
//   if (type !== "user") {
//     className = "chatbot-message";
//   }
//   const messageEle = document.createElement("div");
//   const txtNode = document.createTextNode(txt);
//   messageEle.classList.add(className);
//   messageEle.append(txtNode);
//   chatBody.append(messageEle);
// };

// const getChatbotResponse = (userInput) => {
//   return responseObj[userInput] == undefined
//     ? "Please try something else"
//     : responseObj[userInput];
// };

// const setScrollPosition = () => {
//   if (chatBody.scrollHeight > 0) {
//     chatBody.scrollTop = chatBody.scrollHeight;
//   }
// };


// // Q&N of Bot
// const responseObj = {
//   Hi: "Hi",
//   hi: "Hi",
//   I_have_a_question: "Yeah sure ask anything",
//   Can_you_help_me: "Yeah sure",
//   Whats_your_name: "I dont have any name",
//   For_more_help: "Contact us on - education.123@gmail.com",
//   Bye: "Bye, Hope you will visit soon!!",
//   What_is_the_use_of_your_portal:"You can use our portal for storing your data of all important life phase like your education,health,employment",
//   How_will_you_help_me: "You can ask me any question",
//   How_are_you : "I am fine!!",
//   how_are_you : "I am fine!!",
//   hello: "Hey ! How are you doing ?",
//   hey: "Hey! What's Up",
//   today: new Date().toDateString(),
//   time: new Date().toLocaleTimeString(),
// };

