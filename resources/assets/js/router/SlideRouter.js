import Listslide from '../components/slide/list';
import Addslide from '../components/slide/add';
import Editslide from '../components/slide/edit';
import Viewslide from '../components/slide/view';
import Deleteslide from '../components/slide/delete';


export default [

  {
    name:  'Listslide',
    path: '/list-slide',
    component: Listslide
  },
  ///////slide
  {
    name: 'Addslide',
    path: '/add-slide',
    component: Addslide
  },
   {
    name: 'Editslide',
    path: '/edit-slide/:id',
    component: Editslide
  },
  {
    name: 'Viewslide',
    path: 'view-slide',
    component: Viewslide
  },
  {
    name: 'Deleteslide',
    path: 'delete-slide',
    component: Deleteslide
  },

  ];