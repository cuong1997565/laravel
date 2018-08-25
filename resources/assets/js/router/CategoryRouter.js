import Category from '../components/category/list';
import NewCategory from '../components/category/add';
import EditCategory from '../components/category/edit';
import DeleteCategory from '../components/category/delete';
import ViewCategory from '../components/category/view'
export default [
 {
    name: 'Category',
    path: '/',
    component: Category
  },

  {
    name: 'NewCategory',
    path: '/add-category',
    component: NewCategory
  },
  {
    name: 'EditCategory',
    path: '/edit-category/:id',
    component: EditCategory
  },
  {
    name: 'DeleteCategory',
    path: '/category-delete',
    component: DeleteCategory
  },

   {
    name: 'ViewCategory',
    path: '/category-view',
    component: ViewCategory
  },
];
