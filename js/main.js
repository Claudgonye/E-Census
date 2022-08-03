//Initialize Firebase
import { initializeApp } from "firebase/app";
// import { } from 'firebase/'

// TODO: Replace the following with your app's Firebase project configuration
const firebaseConfig = {
  //...
  apiKey: "AIzaSyASLIaABsN8oA5dcuVZoUjLxGkU-m0ZN5Y",
  authDomain: "e-census.firebaseapp.com",
  projectId: "e-census",
  storageBucket: "e-census.appspot.com",
  messagingSenderId: "987948687690",
  appId: "1:987948687690:web:267b91a15fb349295fa1b3"
};

export const app = initializeApp(firebaseConfig);
// Reference Messages collection
var messagesRef = firebase.database().ref('messages');

// Listen for form submit 
document.getElementById('contactForm').addEventListener('submit', submitForm);

//Submit Form
function submitForm(e){
    e.preventDefault();

    //Get Values
    var name = getInputVal('name');
    var email = getInputVal('email');
    var message = getInputVal('message');

    saveMessage(name, email, message);

}

//Function to get form values
function getInputVal(id){
    return document.getElementById(id).value;
}

//save message to firebase
function saveMessage(name, email, message){
    var newMessageRef = messagesRef.push();
    newMessageRef.set({
        name: name,
        email: email,
        message: message
    });
}