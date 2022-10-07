const chatBody = document.querySelector(".chat-body");
const txtInput = document.querySelector("#txtInput");
const send = document.querySelector(".send");

send.addEventListener("click", () => renderUserMessage());
txtInput.addEventListener("keyup", (event) => {
  if (event.keyCode === 13) {
    renderUserMessage();
  }
});

const renderUserMessage = () => {
  const userInput = txtInput.value;
  renderMessageEle(userInput, "user");
  txtInput.value = "";
  setTimeout(() => {
    renderChatbotResponse(userInput);
    setScrollPosition();
  }, 600);
};

const renderChatbotResponse = (userInput) => {
  const res = getChatbotResponse(userInput);
  renderMessageEle(res);
};

const renderMessageEle = (txt, type) => {
  let className = "user-message";
  if (type !== "user") {
    className = "chatbot-message";
  }
  const messageEle = document.createElement("div");
  const txtNode = document.createTextNode(txt);
  messageEle.classList.add(className);
  messageEle.append(txtNode);
  chatBody.append(messageEle);
};

const getChatbotResponse = (userInput) => {
  return responseObj[userInput] == undefined
    ? "Please try something else"
    : responseObj[userInput];
};

const setScrollPosition = () => {
  if (chatBody.scrollHeight > 0) {
    chatBody.scrollTop = chatBody.scrollHeight;
  }
};

// open and close
function openForm() {
  document.getElementById("bot").style.display = "block";
  document.getElementById("botBT").style.display = "none";
}
function closeForm() {
  document.getElementById("botBT").style.display = "block";
  document.getElementById("bot").style.display = "none";
}

// Q&N of Bot
const responseObj = {
  Hi: "Hi",
  hi: "Hi",
  I_have_a_question: "Yeah sure ask anything",
  Can_you_help_me: "Yeah sure",
  Whats_your_name: "I dont have any name",
  For_more_help: "Contact us on - education.123@gmail.com",
  Bye: "Bye, Hope you will visit soon!!",
  What_is_the_use_of_your_portal:"You can use our portal for storing your data of all important life phase like your education,health,employment",
  How_will_you_help_me: "You can ask me any question",
  How_are_you : "I am fine!!",
  how_are_you : "I am fine!!",
  hello: "Hey ! How are you doing ?",
  hey: "Hey! What's Up",
  today: new Date().toDateString(),
  time: new Date().toLocaleTimeString(),
};