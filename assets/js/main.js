// Recoger datos del HTML
const date = document.querySelector('#date');
const list = document.querySelector('#list');
const input = document.querySelector('#input');
const enter = document.querySelector('#enter');
const check = 'fa-check-circle';
const uncheck = 'fa-circle';
const lineThrough = 'line-through';

let LIST;
let id;

// Inicialización de la aplicación con datos de almacenamiento local
function initializeApp() {
    let data = localStorage.getItem('tasklist');
    if (data) {
        LIST = JSON.parse(data);
        id = LIST.length; // Asegura que el id nuevo no duplique los existentes
        LIST.forEach(item => {
            addTask(item.name, item.id, item.realised, item.deleted);
        });
    } else {
        LIST = [];
        id = 0;
    }
}

// Fecha
const DATE = new Date();
date.innerHTML = DATE.toLocaleDateString('en-EN', { weekday: 'long', month: 'short', day: 'numeric' });

// Función para añadir una tarea
function addTask(task, id, realised, deleted) {
    if (deleted) {
        return;
    }

    const REALISED = realised ? check : uncheck;
    const LINE = realised ? lineThrough : '';

    const element = `
        <li id="element">
            <i class="far ${REALISED}" data="realise" id="${id}"></i>
            <p class="text ${LINE}">${task}</p>
            <i class="fas fa-trash de" data="delete" id="${id}"></i>
        </li>
    `;
    list.insertAdjacentHTML("beforeend", element);
}

// Funciones para gestionar tareas realizadas y eliminadas
function realisedTask(element) {
    element.classList.toggle(check);
    element.classList.toggle(uncheck);
    element.parentNode.querySelector('.text').classList.toggle(lineThrough);
    let item = LIST.find(item => item.id == element.id);
    if (item) {
        item.realised = !item.realised;
    }
    updateLocalStorage();
}

function deletedTask(element) {
    element.parentNode.remove();
    let item = LIST.find(item => item.id == element.id);
    if (item) {
        item.deleted = true;
    }
    updateLocalStorage();
}

// Eventos para añadir tareas
enter.addEventListener('click', () => {
    const task = input.value;
    if (task) {
        addTask(task, id, false, false);
        LIST.push({
            name: task,
            id: id,
            realised: false,
            deleted: false
        });
        updateLocalStorage();
        input.value = '';
        id++;
    }
});

document.addEventListener('keyup', function(event) {
    if (event.key == 'Enter') {
        const task = input.value;
        if (task) {
            addTask(task, id, false, false);
            LIST.push({
                name: task,
                id: id,
                realised: false,
                deleted: false
            });
            updateLocalStorage();
            input.value = '';
            id++;
        }
    }
});

list.addEventListener('click', function(event) {
    const element = event.target;
    const elementData = element.getAttribute('data');
    if (elementData == 'realise') {
        realisedTask(element);
    } else if (elementData == 'delete') {
        deletedTask(element);
    }
});

// Función para actualizar el almacenamiento local
function updateLocalStorage() {
    localStorage.setItem('tasklist', JSON.stringify(LIST));
}

// Iniciar aplicación
initializeApp();
