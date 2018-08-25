import Listpost from '../components/post/list';
import Addpost from '../components/post/add';
import Editpost from '../components/post/edit';
import Viewpost from '../components/post/view';
import Deletepost from '../components/post/delete';


export default [

{
    name      : 'Listpost',
    path      : '/list-post',
    component :  Listpost
  },
    {
    name: 'Addpost',
    path: '/add-post',
    component: Addpost
  },
     {
      name: 'Editpost',
      path: '/edit-post/:id',
      component: Editpost
    },
    {
      name: 'Viewpost',
      path: 'view-post',
      component: Viewpost
    },
    {
      name: 'Deletepost',
      path: 'delete-post',
      component: Deletepost
    }
  ];