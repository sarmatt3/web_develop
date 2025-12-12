/*
    структура, описывающая данные галлереи: массив объектов  
*/ 
let comps =[
    {
        pict: 'img/330px-Apple-II.jpg',
        name: 'Apple-II',
        note: 'Год выпуска - 1984'
    },
    {
        pict: 'img/330px-IBM_5150_PC.jpg',
        name: 'IBM-5150',
        note: 'Год выпуска - 1982'
    },
    {
        pict: 'img/330px-Macintoch_128k_transparency.png"',
        name: 'Macintosh_128',
        note: 'Год выпуска - 1984'
    }
]

/* функция, в которую передается элемент массива,
обратные кавычки
*/

function createCard(comp) {
    return `
        <div class="card">
            <div class="card_img">
                <img src="${comp.pict}">
                <h3>${comp.name}</h3>
            </div>
            <p>${comp.note}</p>
        </div>`
}

/*
 Получаем набор данных (список), оформленных в соответствии с функцией createCard()
*/
let listComp = comps.map(comp => createCard(comp));

/* Разделяем полученнывй список элементов, например, через пробел*/
let html = listComp.join(' ');
 
/* Выводим разделенный список на странице в область с классом list*/
document.querySelector('.list').innerHTML = html;