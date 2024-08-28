let previewContainer = document.querySelector('.box-preview');
let previewBox = previewContainer.querySelectorAll('.preview');
/*let prev = document.querySelector('.prev');
let next = document.querySelector('.next');*/

document.querySelectorAll('.box-container .box').forEach( box =>{
    box.onclick =() =>{
        previewContainer.style.display = 'flex';
    
        let name = box.getAttribute('data-name');
      
        previewBox.forEach( preview =>{
            let target = preview.getAttribute('data-target');

            if(name == target){
                preview.classList.add('active');
            }
        });

    };
});
previewBox.forEach( close =>{
    close.querySelector('.fa-times').onclick = () =>{
        close.classList.remove('active');
        previewContainer.style.display ='none';
    }
})

/*next.addEventListener('click',function(){
    let items = document.querySelectorAll('.profile-youtube')
    document.querySelector('.slide').appendChild(items[0])
   
})



/*prev.addEventListener('click',function(){
    let items = document.querySelectorAll('.profile-youtube')
    document.querySelector('.slide').prepend(items[items.length -1])
})*/




























