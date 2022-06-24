function SelectedWeapon(elem){
    document.getElementById(elem.id).classList.toggle('selected');
}

// function CreateListBox(){
//         var div = document.createElement('div');
//         div.style.border = "2px solid transparent";
//            div.style.backgroundColor = "#302e2b";
//            div.style.position = "absolute";
//            div.style.left = "400px";
//            div.style.top = "510px";
//            div.style.height = "154px";
//            div.style.width = "700px";
//            div.style.padding = "10px";
//            div.style.borderRadius = "10px";
//            div.textContent = "test";
//            div.classList.add("list-text");
//            div.marginTop = "20px";
    
//            document.getElementsByTagName('body')[0].appendChild(div);

//            var buttondiv = document.createElement('div');
//                 buttondiv.style.border = "2px solid transparent";
//                 buttondiv.style.position = "absolute";
//                 buttondiv.style.left = "730px";
//                 buttondiv.style.top = "610px";
//                 buttondiv.style.height = "44px";
//                 buttondiv.style.width = "44px";
//                 buttondiv.style.padding = "10px";
//                 buttondiv.style.borderRadius = "10px";
//                 buttondiv.textContent = "Done";
//                 buttondiv.style.textAlign = "center";
//                 buttondiv.classList.add("done-button");
//                 buttondiv.classList.add("text");
       

//                 var imagediv = document.createElement('div');
//                 imagediv.style.border = "2px solid transparent";
//                 imagediv.style.position = "absolute";
//                 imagediv.style.left = "730px";
//                 imagediv.style.top = "610px";
//                 imagediv.style.height = "150px";
//                 imagediv.style.width = "190px";
//                 imagediv.style.padding = "10px";
//                 imagediv.style.borderRadius = "10px";
//                 imagediv.style.textAlign = "center";
//                 imagediv.style.backgroundColor = "#191615;";
       
//               document.getElementsByTagName('body')[0].appendChild(imagediv);
//     };
