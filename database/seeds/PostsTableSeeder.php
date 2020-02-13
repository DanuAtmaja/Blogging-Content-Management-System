<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $post = Post::create(
        [
          'title' => 'Creating Blog Content Management System Using Laravel',
          'slug' => 'creating-blog-content-management-system-using-laravel',
          'content' => '<p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac quam tempor, pharetra ante sit amet, mollis ipsum. Proin id erat sit amet urna tincidunt scelerisque id at ligula. Fusce tortor nunc, pharetra vitae iaculis sit amet, elementum id eros. Duis lacinia, arcu tempor rutrum convallis, sapien lectus venenatis dui, sed cursus libero urna non nulla. Sed ante libero, pharetra in leo in, gravida ullamcorper justo. In congue enim sit amet tortor lacinia, eleifend tincidunt libero blandit. Pellentesque convallis felis quis viverra pharetra. Cras ante mi, imperdiet eget mi vel, pretium suscipit turpis. Nunc sollicitudin justo ornare tellus pharetra finibus.</p><p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Etiam blandit justo id mi fermentum congue. Proin bibendum sapien sed justo volutpat, at dictum magna maximus. Morbi lacus dui, euismod ut turpis sit amet, molestie congue dui. Suspendisse convallis eros at justo feugiat viverra. Fusce tempus imperdiet ligula, vitae tempus odio gravida in. Vivamus blandit magna et efficitur tempor. In tincidunt consequat turpis, eget eleifend dui fringilla non. Integer finibus sodales est et blandit. Maecenas fringilla nisl vel nisi euismod, sed congue turpis faucibus. Duis tempus erat quis arcu euismod feugiat. Vestibulum tempor tortor tortor, quis aliquet mauris luctus eget.</p>',

          'category_id' => '2',
          'featured' => 'uploads/posts/1581432542blogging.jpg',
          'user_id' => '1'
        ]
      );
      $post->tags()->sync([1,1]);
      $post->tags()->sync([1,2]);

      $post = Post::create(
        [
          'title' => 'Creating CRUD VidJot using Node JS',
          'slug' => 'creating-crud-vidjot-using-node-js',
          'content' => '<p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac quam tempor, pharetra ante sit amet, mollis ipsum. Proin id erat sit amet urna tincidunt scelerisque id at ligula. Fusce tortor nunc, pharetra vitae iaculis sit amet, elementum id eros. Duis lacinia, arcu tempor rutrum convallis, sapien lectus venenatis dui, sed cursus libero urna non nulla. Sed ante libero, pharetra in leo in, gravida ullamcorper justo. In congue enim sit amet tortor lacinia, eleifend tincidunt libero blandit. Pellentesque convallis felis quis viverra pharetra. Cras ante mi, imperdiet eget mi vel, pretium suscipit turpis. Nunc sollicitudin justo ornare tellus pharetra finibus.</p><p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Etiam blandit justo id mi fermentum congue. Proin bibendum sapien sed justo volutpat, at dictum magna maximus. Morbi lacus dui, euismod ut turpis sit amet, molestie congue dui. Suspendisse convallis eros at justo feugiat viverra. Fusce tempus imperdiet ligula, vitae tempus odio gravida in. Vivamus blandit magna et efficitur tempor. In tincidunt consequat turpis, eget eleifend dui fringilla non. Integer finibus sodales est et blandit. Maecenas fringilla nisl vel nisi euismod, sed congue turpis faucibus. Duis tempus erat quis arcu euismod feugiat. Vestibulum tempor tortor tortor, quis aliquet mauris luctus eget.</p>',

          'category_id' => '2',
          'featured' => 'uploads/posts/1581432667nodejs.png',
          'user_id' => '1'
        ]
      );
      $post->tags()->sync([2,1]);
      $post->tags()->sync([2,2]);

      $post = Post::create(
        [
          'title' => 'Learn React JS buliding Todo List Aplication',
          'slug' => 'learn-react-js-buliding-todo-list-aplication',
          'content' => '<p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac quam tempor, pharetra ante sit amet, mollis ipsum. Proin id erat sit amet urna tincidunt scelerisque id at ligula. Fusce tortor nunc, pharetra vitae iaculis sit amet, elementum id eros. Duis lacinia, arcu tempor rutrum convallis, sapien lectus venenatis dui, sed cursus libero urna non nulla. Sed ante libero, pharetra in leo in, gravida ullamcorper justo. In congue enim sit amet tortor lacinia, eleifend tincidunt libero blandit. Pellentesque convallis felis quis viverra pharetra. Cras ante mi, imperdiet eget mi vel, pretium suscipit turpis. Nunc sollicitudin justo ornare tellus pharetra finibus.</p><p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Etiam blandit justo id mi fermentum congue. Proin bibendum sapien sed justo volutpat, at dictum magna maximus. Morbi lacus dui, euismod ut turpis sit amet, molestie congue dui. Suspendisse convallis eros at justo feugiat viverra. Fusce tempus imperdiet ligula, vitae tempus odio gravida in. Vivamus blandit magna et efficitur tempor. In tincidunt consequat turpis, eget eleifend dui fringilla non. Integer finibus sodales est et blandit. Maecenas fringilla nisl vel nisi euismod, sed congue turpis faucibus. Duis tempus erat quis arcu euismod feugiat. Vestibulum tempor tortor tortor, quis aliquet mauris luctus eget.</p>',

          'category_id' => '1',
          'featured' => 'uploads/posts/1581432755reactJS.png',
          'user_id' => '1'
        ]
      );
      $post->tags()->sync([3,1]);
      $post->tags()->sync([3,2]);
      $post->tags()->sync([3,3]);


      $post = Post::create(
        [
          'title' => 'Building Wireframe Using Adobe XD',
          'slug' => 'building-wireframe-using-adobe-xd',
          'content' => '<p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac quam tempor, pharetra ante sit amet, mollis ipsum. Proin id erat sit amet urna tincidunt scelerisque id at ligula. Fusce tortor nunc, pharetra vitae iaculis sit amet, elementum id eros. Duis lacinia, arcu tempor rutrum convallis, sapien lectus venenatis dui, sed cursus libero urna non nulla. Sed ante libero, pharetra in leo in, gravida ullamcorper justo. In congue enim sit amet tortor lacinia, eleifend tincidunt libero blandit. Pellentesque convallis felis quis viverra pharetra. Cras ante mi, imperdiet eget mi vel, pretium suscipit turpis. Nunc sollicitudin justo ornare tellus pharetra finibus.</p><p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Etiam blandit justo id mi fermentum congue. Proin bibendum sapien sed justo volutpat, at dictum magna maximus. Morbi lacus dui, euismod ut turpis sit amet, molestie congue dui. Suspendisse convallis eros at justo feugiat viverra. Fusce tempus imperdiet ligula, vitae tempus odio gravida in. Vivamus blandit magna et efficitur tempor. In tincidunt consequat turpis, eget eleifend dui fringilla non. Integer finibus sodales est et blandit. Maecenas fringilla nisl vel nisi euismod, sed congue turpis faucibus. Duis tempus erat quis arcu euismod feugiat. Vestibulum tempor tortor tortor, quis aliquet mauris luctus eget.</p>',

          'category_id' => '5',
          'featured' => 'uploads/posts/1581432828visualize.jpg',
          'user_id' => '1'
        ]
      );
      $post->tags()->sync([4,3]);


      $post = Post::create(
        [
          'title' => 'Using Recycler View in Android',
          'slug' => 'using-recycler-view-in-android',
          'content' => '<p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac quam tempor, pharetra ante sit amet, mollis ipsum. Proin id erat sit amet urna tincidunt scelerisque id at ligula. Fusce tortor nunc, pharetra vitae iaculis sit amet, elementum id eros. Duis lacinia, arcu tempor rutrum convallis, sapien lectus venenatis dui, sed cursus libero urna non nulla. Sed ante libero, pharetra in leo in, gravida ullamcorper justo. In congue enim sit amet tortor lacinia, eleifend tincidunt libero blandit. Pellentesque convallis felis quis viverra pharetra. Cras ante mi, imperdiet eget mi vel, pretium suscipit turpis. Nunc sollicitudin justo ornare tellus pharetra finibus.</p><p style="margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Etiam blandit justo id mi fermentum congue. Proin bibendum sapien sed justo volutpat, at dictum magna maximus. Morbi lacus dui, euismod ut turpis sit amet, molestie congue dui. Suspendisse convallis eros at justo feugiat viverra. Fusce tempus imperdiet ligula, vitae tempus odio gravida in. Vivamus blandit magna et efficitur tempor. In tincidunt consequat turpis, eget eleifend dui fringilla non. Integer finibus sodales est et blandit. Maecenas fringilla nisl vel nisi euismod, sed congue turpis faucibus. Duis tempus erat quis arcu euismod feugiat. Vestibulum tempor tortor tortor, quis aliquet mauris luctus eget.</p>',

          'category_id' => '3',
          'featured' => 'uploads/posts/1581432927android.png',
          'user_id' => '1'
        ]
      );
      $post->tags()->sync([5,1]);

    }
}
