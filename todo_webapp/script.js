document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('todo-form');
    const titleInput = document.getElementById('title');
    const descriptionInput = document.getElementById('description');
    const pendingTasksList = document.getElementById('pending-tasks');
    const completedTasksList = document.getElementById('completed-tasks');

    let tasks = JSON.parse(localStorage.getItem('tasks')) || [];

    function saveTasks() {
        localStorage.setItem('tasks', JSON.stringify(tasks));
    }

    function renderTasks() {
        pendingTasksList.innerHTML = '';
        completedTasksList.innerHTML = '';

        tasks.forEach((task, index) => {
            const li = document.createElement('li');
            li.className = 'todo-item';
            li.innerHTML = `
                <div class="task-info">
                    <h3>${task.title}</h3>
                    <p>${task.description}</p>
                    <div class="task-date">${task.date}</div>
                </div>
                <div class="task-actions">
                    <button id="edit-task" onclick="editTask(${index})">Edit</button>
                    <button onclick="toggleComplete(${index})">${task.completed ? 'Undo' : 'Complete'}</button>
                    <button id="del-task" onclick="deleteTask(${index})">Delete</button>
                </div>
            `;

            if (task.completed) {
                completedTasksList.appendChild(li);
            } else {
                pendingTasksList.appendChild(li);
            }
        });

    }

    form.addEventListener('submit', (e) => {
        e.preventDefault();
        const title = titleInput.value.trim();
        const description = descriptionInput.value.trim();
        if (title) {
            const newTask = {
                title,
                description,
                completed: false,
                date: new Date().toLocaleString()
            };
            tasks.push(newTask);
            saveTasks();
            renderTasks();
            titleInput.value = '';
            descriptionInput.value = '';
        }
    });

    window.editTask = (index) => {
        const task = tasks[index];
        const newTitle = prompt('Edit task title:', task.title);
        const newDescription = prompt('Edit task description:', task.description);
        if (newTitle !== null) {
            task.title = newTitle.trim();
            task.description = newDescription.trim();
            saveTasks();
            renderTasks();
        }
    };

    window.toggleComplete = (index) => {
        tasks[index].completed = !tasks[index].completed;
        saveTasks();
        renderTasks();
    };

    window.deleteTask = (index) => {
        if (confirm('Are you sure you want to delete this task?')) {
            tasks.splice(index, 1);
            saveTasks();
            renderTasks();
        }
    };

    renderTasks();
});