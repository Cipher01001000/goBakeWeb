const tabs = document.querySelectorAll('.tab_btn');
const all_content = document.querySelectorAll('.content');

        tabs.forEach((tab, index)=>{
            tab.addEventListener('click', ()=>{
                tabs.forEach(tab=>{tab.classList.remove('text-pink-500')});
                tab.classList.add('text-pink-500');

                all_content.forEach(content=>{content.classList.remove('flex')});
                all_content.forEach(content=>{content.classList.add('hidden')});
                all_content[index].classList.add('flex');
                all_content[index].classList.remove('hidden');
            })
        })