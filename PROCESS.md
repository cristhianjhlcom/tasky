# Tasky Project Process

## WIP

### 25/12/2024

-   [x] Creación de proyecto en Laravel.
-   [x] Instalación y configuración de Livewire.
-   [x] Instalación y configuración de librería de componentes Flux Pro.
-   [x] Creación de componente Task para Livewire.
-   [x] Creación de migración para modelo Task.
    -   uuid
    -   title
    -   status (enum: In Progress, Cancelled, Completed)
    -   description
    -   completed_at
    -   created_at
    -   updated_at
    -   deleted_at
-   [x] Agregar seeder y factories para pruebas y llenar la base de datos.
-   [x] Agregar Pest test version 3.7 al proyecto.
-   [x] Se agrego componente de heading para los mensajes de las tareas (tasks) y su mensaje.
-   [x] Se llamo lista de tareas y se envio como parametros a la vista para que se pueda renderizar en una tabla.
-   [x] Se agrego enum de estado de tareas para mejor legibilidad y consistencia del código.

## TEST

### 25/12/2024

#### Task

-   [x] Deberia responder status code en 200 al visitar la route de tasks.
-   [x] Deberia ver los mensajes del heading al visitar la route de tasks.
