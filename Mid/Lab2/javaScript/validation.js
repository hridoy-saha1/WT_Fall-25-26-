const Name=document.getElementById("name");
const Email=document.getElementById("email");
const Password=document.getElementById("password");
const ConfirmPassword=document.getElementById("confirm-password");
const Submit=document.getElementById("submit");
const Output=document.getElementById("output");


Submit.onclick=function(event){
  event.preventDefault();

if(Name.value && Email.value && Password.value && ConfirmPassword.value){
  if(Password.value!==ConfirmPassword.value){
    alert("Password No Match")
  }
  else if(!Email.value.includes('@')){
    alert("The email must contain “@” ")

  }
  else{
    Output.innerHTML=`
    
    <h4>Registration Successful</h4>
     <p>Name:${Name.value}</p>
     <p>Email:${Email.value}</p>
    
    `
  }
}
else
{
alert("All Filled Are Required!!")
}

}

const CourseName=document.getElementById("c-name");
const AddBtn=document.getElementById("add");

const CourseList=document.getElementById("course-list")

AddBtn.onclick=function(){
 if(CourseName.value){
   CourseList.innerHTML +=`
  <div id="list">
  
   <p>${CourseName.value}</p>
   <button id="btn">Delete</button>


  </div>
  
  `
 }
 else{
   CourseList.innerHTML +=`
  <p id="red">Filled The Box</p>  
  `
 }

}

btn.onclick=function(e){
  e.parentElement.remove();
}


// const CourseName = document.getElementById("c-name");
// const AddBtn = document.getElementById("add");
// const CourseList = document.getElementById("course-list");

// AddBtn.onclick = function () {
//   if (CourseName.value) {
//     CourseList.innerHTML += `
//       <div class="list-item">
//         <p>${CourseName.value}</p>
//         <button class="delete-btn">Delete</button>
//       </div>
//     `;
//     CourseName.value = "";
//   } else {
//     CourseList.innerHTML += `<p id="red">Fill The Box</p>`;
//   }
// };

// // Delete button functionality using Event Delegation
// CourseList.addEventListener("click", function (e) {
//   if (e.target.classList.contains("delete-btn")) {
//     e.target.parentElement.remove(); // remove that list item
//   }
// });

// const CourseName = document.getElementById("c-name");
// const AddBtn = document.getElementById("add");
// const CourseList = document.getElementById("course-list");

// AddBtn.onclick = function () {
//   if (CourseName.value) {
//     CourseList.innerHTML += `
//       <div class="list-item">
//         <p>${CourseName.value}</p>
//         <button onclick="deleteItem(this)">Delete</button>
//       </div>
//     `;
//     CourseName.value = "";
//   } else {
//     CourseList.innerHTML += `<p id="red">Fill The Box</p>`;
//   }
// };

// function deleteItem(btn){
//   btn.parentElement.remove();
// }
