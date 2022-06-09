function SelectedClass(elem){
    document.getElementById(elem.id).classList.toggle('selected');
    DontInclude();
}

function SelectedWeapon(elem){
    document.getElementById(elem.id).classList.toggle('selected');
    DontInclude();
}

function DontInclude(){
    //code here bla bla bla//
    //check for class > if class > remove selected class//
    //check for weapon type > if weapon type > remove selected weapon type//
    //should remove class' weapons from generated list//
    GenerateList();
}

function GenerateList(){
    //more code here aishfgoughdg//
    //should generate a list of weapons//
    //must print:
    //- weapon image
    //- weapon name
    //- "done" button
    //- button shows next item in list

}