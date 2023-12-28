let alert =document.getElementsByClassName('alert');
function remove(){
  for (let i = 0; i < alert.length; i++) {
        alert[i].style.display = 'none';
    }
}