const counters  = document.querySelectorAll('.counter');
const speed = 200;
counters.forEach((counter) =>{
    counter.innerText = '0';

    const updateCounter = ()=>{
        const target = +counter.getAttribute('data-target');
        
        const c = +counter.innerText;
        const increment = target / speed ;
        console.log(increment);
        if(c < target){
            counter.innerText = `${Math.ceil(c +increment)}`;
            setTimeout(updateCounter, 1);
        }
        else{
            counter.innerText = target;
        }
    };
    updateCounter();
});