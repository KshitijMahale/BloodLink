// const dOptions = document.querySelectorAll('.dOptions');

// function applyStylesToOption(selectedOption) {
//     document.querySelectorAll(".dOptions").classList.remove("default-option");
//     // Remove styles
//     dOptions.forEach(option => {
//         option.style.backgroundColor = '';
//         option.style.color = '';
//         option.style.boxShadow = '';
//     });

//     // Apply styles
//     selectedOption.style.backgroundColor = '#fff';
//     selectedOption.style.color = '#000';
//     selectedOption.style.boxShadow = '1px 1px 5px #000';
// }


// dOptions.forEach(option => {
//     option.addEventListener('click', function() {
//         applyStylesToOption(this); // 'this' is the clicked option
//     });
// });





// const dOptions = document.querySelectorAll(".dOptions");

// dOptions.forEach((option) => {
//     option.addEventListener("click", () => {
//         dOptions.forEach((opt) => {
//             opt.classList.remove("selected-link");
//         });
//         option.classList.add("selected-link");
//     });
// });




// const listItems = document.querySelectorAll('.dOptions');

// listItems.forEach((item) => {
//     item.addEventListener('click', () => {
//         // Remove existing styles from all list items
//         listItems.forEach((li) => {
//             li.classList.remove('selected-link');
//         });

//         // Apply styles to the clicked list item
//         item.classList.add('selected-link');

//         // Redirect to the corresponding page
//         const dOptions = document.querySelectorAll(".dOptions");
//         dOptions.forEach((item) => {
//             item.addEventListener("click", () => {
//                 const id = item.id;
//                 console.log("Clicked: " + id);
//         // const id = item.id;
//         if (id === 'profile') {
//             window.location.href = 'Dprofile.php';
//         } else if (id === 'edit') {
//             window.location.href = 'Dedit.php';
//         } else if (id === 'delete') {
//             window.location.href = 'Ddelete.php';
//         }
//     });
// });

//     });
// });


//// working
// document.addEventListener("DOMContentLoaded", function () {
//     const dOptions = document.querySelectorAll(".dOptions");
//     const links = ["Dprofile.php", "Dedit.php", "Ddelete.php"];

//     dOptions.forEach((option, index) => {
//         option.addEventListener("click", () => {
//             // Remove existing styles from all options
//             dOptions.forEach((opt) => {
//                 opt.classList.remove("selected-link");
//             });

//             // Apply styles to the clicked option
//             option.classList.add("selected-link");

//             // Redirect to the respective page
//             window.location.href = links[index];
//         });
//     });
// });



const dOptions = document.querySelectorAll(".dOptions");

dOptions.forEach((option) => {
    option.addEventListener("click", () => {
        // Remove existing styles from all options
        dOptions.forEach((opt) => {
            opt.classList.remove("selected-link");
        });

        // Apply styles to the clicked option
        option.classList.add("selected-link");

        // Handle page redirection based on the selected option
        if (option.textContent === "Profile") {
            window.location.href = 'Dprofile.php';
        } else if (option.textContent === "Edit details") {
            window.location.href = 'Dedit.php';
        } else if (option.textContent === "Delete profile") {
            window.location.href = 'Ddelete.php';
        }
    });
});
