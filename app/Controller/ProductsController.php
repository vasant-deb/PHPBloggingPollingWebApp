<?php
App::uses('AppController', 'Controller');
class ProductsController extends AppController {

////////////////////////////////////////////////////////////

    public $components = [
        'RequestHandler',
    ];

////////////////////////////////////////////////////////////

    public function beforeFilter() {
        parent::beforeFilter();
    }

////////////////////////////////////////////////////////////

    public function index() {
				
		  $this->loadModel('Sitepage');	
   
		  $product_page = $this->Sitepage->find('first', array(
			'recursive' => 0,
			'order' => array(
				
			),
			'conditions' => array(
			'Sitepage.id' => '3'
			),
		));
		
        $products = $this->Product->find('all', [            
            'conditions' => [
                'Product.active' => 1,
            ],
            'order' => [
                'Product.views' => 'ASC'
            ]
        ]);
        
		$this->set(compact('product_page','products'));
   
     //   $this->Product->updateViews($products);

    }

////////////////////////////////////////////////////////////


	
      public function view($id = null) {
		 $product = $this->Product->find('first', [
            'recursive' => -1,
            'contain' => [
            'Productphoto',
			'Category',
			'Gallery',

            ],
            'conditions' => [              
                'Product.active' => 1,
                'Product.slug' => $id
            ]
        ]);
		  
			   $this->set(compact('product'));
        if (empty($product)) {
            return $this->redirect(['action' => 'index'], 301);
        }

		
		
        $this->Product->updateViews($product);

		
		 
		
		
		
	if(!empty($product['Product']['meta_title'])) {	
		$meta_title   = $product['Product']['meta_title'];
	}
	if(!empty($product['Product']['meta_keyword'])) {	
		$meta_keyword = $product['Product']['meta_keyword'];
	}
	if(!empty($product['Product']['meta_desc'])) {	
		$meta_desc   = $product['Product']['meta_desc'];
	}
	 	$this->set(compact('meta_title','meta_keyword','meta_desc'));

		
		$category = array();
 
  
$product_category= $product['Product']['category_id'];
	
	$productcat = $this->Product->find('all', [
            'recursive' => -1,
            'contain' => [
            'Productphoto'
            ],
            'conditions' => [              
                'Product.active' => 1,
                'Product.category_id' => $product['Product']['category_id'],
            ]
        ]);

	
	if($product_category) { 
			$this->loadModel('Category');		
			$category = $this->Category->find('all', array(	 
				'conditions' => array(
				'Category.id in ('.$product_category.')',
			//	'Size.active' => '1'
				),
			));
		}
		
		$this->set(compact('category','productcat'));
	
	
		
        $this->set(compact('product'));
$this->loadModel('Category');
       $products = $this->Product->find('all', [
            'recursive' => -1,          
          
            'conditions' => [
                'Product.active' => 1,
				//'Product.id' =>"Category.id"
            ],
            'order' => [
                'Product.id' => 'ASC'
            ]
        ]);
		$conditions[] = "Category.id = ".$product['Product']['id'];
		//$conditions[] = "Product.category_id = ".$category['Category']['id'];
      
	    $this->set(compact('products'));
 
 
 
    }
	  
  	  
   public function searchjson() {

        $term = null;
        if(!empty($this->request->query['term'])) {
            $term = $this->request->query['term'];
            $terms = explode(' ', trim($term));
            $terms = array_diff($terms, array(''));
            $conditions = [
                // 'Brand.active' => 1,
                'Product.active' => 1
            ];
            foreach($terms as $term) {
                $conditions[] = [
                    'Product.name LIKE' => '%' . $term . '%'
                ];
            }
            $products = $this->Product->find('all', [
                'recursive' => -1,
                'contain' => [
                    // 'Brand'
                ],
                'fields' => [
                    'Product.id',
                    'Product.name',
                    'Product.image'
                ],
                'conditions' => $conditions,
                'limit' => 20,
            ]);
        }
        // $products = Hash::extract($products, '{n}.Product.name');
        echo json_encode($products);
        $this->autoRender = false;

    }
	
	  public function search() {

 	  
        $search = null;
        if(!empty($this->request->query['search']) || !empty($this->request->data['name'])) {
            $search = empty($this->request->query['search']) ? $this->request->data['name'] : $this->request->query['search'];
           // $search = preg_replace('/[^a-zA-Z0-9 ]/', '', $search);
            $terms = explode(' ', trim($search));
            $terms = array_diff($terms, array(''));
			
			
            $conditions = [
                // 'Brand.active' => 1,
               // 'Product.active' => 1,
            ];
            foreach($terms as $term) {
                $terms1[] = preg_replace('/[^a-zA-Z0-9]/', '', $term);
              /*  $conditions[] = [
                    'Product.name LIKE' => '%' . $term . '%',
					'Product.model_no LIKE' => '%' . $term . '%',	
                ]; */
				$conditions[] = array (
				'OR' => array(
				array('Product.name LIKE' => '%' . $term . '%'),
				array('Product.model_no LIKE' => '%' . $term . '%'),
				)

    );
            }
					//	print_r($conditions);
						
					//	echo $search; exit;

            $products = $this->Product->find('all', [
                'recursive' => -1,
                'contain' => [
                    'Category'
                ],
                'conditions' => $conditions,
                'limit' => 200,
            ]);
            if(count($products) == 1) {
            //    return $this->redirect(['controller' => 'products', 'action' => 'view', 'slug' => $products[0]['Product']['slug']]);
            }
			
			//print_r($products);
			//exit;
			
            $terms1 = array_diff($terms1, array(''));
            $this->set(compact('products', 'terms1'));
        }
        $this->set(compact('search'));

        if ($this->request->is('ajax')) {
            $this->layout = false;
            $this->set('ajax', 1);
        } else {
            $this->set('ajax', 0);
        }

        $this->set('title_for_layout', 'Search');

        $description = 'Search';
        $this->set(compact('description'));

        $keywords = 'search';
        $this->set(compact('keywords'));
				
		$sizes = '';
		$colors = '';
		$this->set(compact('sizes','colors'));
  
    }
	
	
	public function admin_index() { 
		
		$products = $this->Product->find('all', array(
			'recursive' => 0,
		 	'contain' => [
			'Category',  
							
            ],  
			'order' => array(
				'Product.id' => 'DESC'
			),
			'conditions' => array(
			),
		));
		
		
		$this->set(compact('products'));
		
	}
	 

////////////////////////////////////////////////////////////

    public function admin_view($id = null) {

        if (($this->request->is('post') || $this->request->is('put')) && !empty($this->request->data['Product']['image']['name'])) {

            $this->Img = $this->Components->load('Img');

            $newName = $this->request->data['Product']['slug'];

            $ext = $this->Img->ext($this->request->data['Product']['image']['name']);

            $origFile = $newName . '.' . $ext;
            $dst = $newName . '.jpg';

            $targetdir = WWW_ROOT . 'images/original';

            $upload = $this->Img->upload($this->request->data['Product']['image']['tmp_name'], $targetdir, $origFile);

            if($upload == 'Success') {
                $this->Img->resampleGD($targetdir . DS . $origFile, WWW_ROOT . 'images/large/', $dst, 800, 800, 1, 0);
                $this->Img->resampleGD($targetdir . DS . $origFile, WWW_ROOT . 'images/small/', $dst, 180, 180, 1, 0);
                $this->request->data['Product']['image'] = $dst;
            } else {
                $this->request->data['Product']['image'] = '';
            }

            if ($this->Product->save($this->request->data)) {
                $this->Flash->flash($upload);
                return $this->redirect($this->referer());
            } else {
                $this->Flash->flash('The Product could not be saved. Please, try again.');
            }
        }

        if (!$this->Product->exists($id)) {
            throw new NotFoundException('Invalid product');
        }
        $product = $this->Product->find('first', [
            'recursive' => -1,
            'contain' => [
                'Category',
                'Brand',
            ],
            'conditions' => [
                'Product.id' => $id
            ]
        ]);
        $this->set(compact('product'));
    }

////////////////////////////////////////////////////////////

    public function admin_add() {
						
		$_SESSION['KCFINDER'] = [
            'disabled' => false,
            'uploadURL' => '../images/products',
            'uploadDir' => '',
            'dirPerms' => 0777,
            'filePerms' => 0777
        ];
		
        if ($this->request->is('post')) {
			
		

			$this->request->data['Product']['slug'] = $this->generateSlug($this->request->data['Product']['name']);

				$filename = "";
				if(!empty($this->data['Product']['image']['name']))
                {
					  $filename = $this->process_image($this->request->data['Product']['image'], 'img-'.$this->request->data['Product']['slug'],'products/');
				}
				
			$this->request->data['Product']['image'] = $filename;
		
		 
		 $full_image = "";
				if(!empty($this->data['Product']['full_image']['name']))
                {
					  $full_image = $this->process_image($this->request->data['Product']['full_image'], 'img-back-'.$this->request->data['Product']['slug'],'products/');
				}
				
			$this->request->data['Product']['full_image'] = $full_image;
			 
		
            $this->Product->create();
            if ($this->Product->save($this->request->data)) {
                $this->Flash->flash('The product has been saved');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->flash('The product could not be saved. Please, try again.');
            }
        }
       		 
		$this->loadModel('Category');		
		$categories = $this->Category->generateTreeList(null, null, null, ' -- ');
		$this->set(compact('categories'));
		   
	
		
		     	
    }


    public function admin_edit($id = null) {
 			
        $_SESSION['KCFINDER'] = [
            'disabled' => false,
            'uploadURL' => '../images/products',
            'uploadDir' => '',
            'dirPerms' => 0777,
            'filePerms' => 0777
        ];

        if (!$this->Product->exists($id)) {
            throw new NotFoundException('Invalid product');
        }
		
		 $product = $this->Product->find('first', [
                'conditions' => [
                    'Product.id' => $id
                ]
            ]);
 			 
	
		$filename   = $product['Product']['image'];
		$back_image = $product['Product']['full_image'];
		
        if ($this->request->is('post') || $this->request->is('put')) {
 	
			

		$this->request->data['Product']['slug'] = $this->generateSlug($this->request->data['Product']['name']);
					  
		if(!empty($this->data['Product']['image']['name']))
                {
					  $filename = $this->process_image($this->request->data['Product']['image'], 'img-'.$this->request->data['Product']['slug'],'products/');
				}
				
			$this->request->data['Product']['image'] = $filename;
	 
		 
				if(!empty($this->data['Product']['full_image']['name']))
                {
					  $back_image = $this->process_image($this->request->data['Product']['full_image'], 'img-back-'.$this->request->data['Product']['slug'],'products/');
				}
				
			$this->request->data['Product']['full_image'] = $back_image;
		
		 
		 
		 
		 
            if ($this->Product->save($this->request->data)) {
                $this->Flash->flash('The product has been saved');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->flash('The product could not be saved. Please, try again.');
            }
        } else {
            $product = $this->Product->find('first', [
                'conditions' => [
                    'Product.id' => $id
                ]
            ]);
            $this->request->data = $product;
        }

        $this->set(compact('id'));

        $this->set(compact('product'));

 
		$this->loadModel('Category');		
		$categories = $this->Category->generateTreeList(null, null, null, ' -- ');
		$this->set(compact('categories'));
		   
		
		
		
    }

////////////////////////////////////////////////////////////

    public function admin_tags($id = null) {

        $tags = ClassRegistry::init('Tag')->find('all', [
            'recursive' => -1,
            'fields' => [
                'Tag.name'
            ],
            'order' => [
                'Tag.name' => 'ASC'
            ],
        ]);
        $tags = Hash::combine($tags, '{n}.Tag.name', '{n}.Tag.name');
        $this->set(compact('tags'));

        if ($this->request->is('post') || $this->request->is('put')) {

            $tagstring = '';

            foreach($this->request->data['Product']['tags'] as $tag) {
                $tagstring .= $tag . ', ';
            }

            $tagstring = trim($tagstring);
            $tagstring = rtrim($tagstring, ',');

            $this->request->data['Product']['tags'] = $tagstring;

            $this->Product->save($this->request->data, false);

            return $this->redirect(['action' => 'tags', $this->request->data['Product']['id']]);

        }

        $product = $this->Product->find('first', [
            'conditions' => [
                'Product.id' => $id
            ]
        ]);
        if (empty($product)) {
            throw new NotFoundException('Invalid product');
        }
        $this->set(compact('product'));

        $selectedTags = explode(',', $product['Product']['tags']);
        $selectedTags = array_map('trim', $selectedTags);
        $this->set(compact('selectedTags'));

        $neighbors = $this->Product->find('neighbors', ['field' => 'id', 'value' => $id]);
        $this->set(compact('neighbors'));

    }

////////////////////////////////////////////////////////////

    public function admin_csv() {
        $products = $this->Product->find('all', [
            'recursive' => -1,
        ]);
        $this->set(compact('products'));
        $this->layout = false;
    }

	 
	public function admin_dropdown_subcategories()
    {
        if(!$this->request->is('AJAX'))
        {
            return $this->redirect(array('controller'=>'products', 'action'=>'index'));
        }
        
		
	     $parent_category_id  =  @$this->request->data['parent_category_id'];
         	$this->loadModel('Category');	 

		    $options = [
            'recursive' => 0,
            'conditions' => [
				'Category.parent_id' => $parent_category_id,
             ]
        ];
       
		$categories =   $this->Category->find('all', $options);
?>	
<select name="data[Product][category_id]" class="form-control col-md-3" id="ProductCategoryId">
<?php foreach ($categories as $category): ?>
<option value="<?php echo h($category['Category']['id']); ?>"><?php echo h($category['Category']['name']); ?></option>
<?php endforeach; ?>

</select>

<?php
		
         die;
    }
	 
	
////////////////////////////////////////////////////////////


 public function admin_change_product_hot()
    {
        if(!$this->request->is('AJAX'))
        {
            return $this->redirect(array('controller'=>'products', 'action'=>'index'));
        }
        
        if(!$this->Product->save(array('id'=>$this->request->data['product_id'], 'hot_product'=>$this->request->data['hot_product'])))
        {
            echo json_encode(array('status'=>'failure', 'message'=>'Unable to set Product as Featured at the moment.'));
            die;
        }
        
        echo json_encode(array('status'=>'success', 'message'=>'Product set as Featured.'));
        die;
    }

 public function admin_change_product_status()
    {
        if(!$this->request->is('AJAX'))
        {
            return $this->redirect(array('controller'=>'products', 'action'=>'index'));
        }
        
        if(!$this->Product->save(array('id'=>$this->request->data['product_id'], 'active'=>$this->request->data['status'])))
        {
            echo json_encode(array('status'=>'failure', 'message'=>'Unable to set status at the moment.'));
            die;
        }
        
        echo json_encode(array('status'=>'success', 'message'=>'Product status updated.'));
        die;
    }
	
    public function admin_delete($id = null) {
        $this->Product->id = $id;
        if (!$this->Product->exists()) {
            throw new NotFoundException('Invalid product');
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->Product->delete()) {
            $this->Flash->flash('Product deleted');
            return $this->redirect(['action' => 'index']);
        }
        $this->Flash->flash('Product was not deleted');
        return $this->redirect(['action' => 'index']);
    }

////////////////////////////////////////////////////////////

}
