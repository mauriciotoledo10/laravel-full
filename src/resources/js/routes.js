import AllFurniture from './components/AllFurniture.vue';
import CreateFurniture from './components/CreateFurniture.vue';
import EditFurniture from './components/EditFurniture.vue';

export const routes = [
    {
        name: 'home',
        path: '/',
        component: AllFurniture
    },
    {
        name: 'create',
        path: '/create',
        component: CreateFurniture
    },
    {
        name: 'edit',
        path: '/edit/:id',
        component: EditFurniture
    }
];