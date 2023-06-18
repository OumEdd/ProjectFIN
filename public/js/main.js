document.getElementById('navbarToggle').addEventListener('click', function() {
    this.classList.toggle('active');
    document.getElementById('navbarLinks').classList.toggle('active');
});

var validatShow=document.getElementById('validatShow');
validatShow.addEventListener('click',()=>{
    console.log('good');
})



