

    var modalDelete = document.querySelector('#modalDelete');
    var deleteSpan = document.getElementById('deleteSpan');
    
    function deletes(name, dataurl) {
        
    deleteSpan.innerHTML = name;
        
    var form = document.getElementById('modalDeleteResourceForm');
    form.action = dataurl;
    
    };
    
var ico = document.getElementById('ico');
var back = document.querySelector('.back');

back.addEventListener("mouseover", changes);
back.addEventListener("mouseout", changes);

function changes(){
    if(ico.className == 'mai-arrow-back-circle'){
        ico.className = 'mai-arrow-back-circle-outline';
    }else{
        ico.className = 'mai-arrow-back-circle';
    }
}