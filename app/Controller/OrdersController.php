<?php
App::uses('AppController', 'Controller');
class OrdersController extends AppController {

////////////////////////////////////////////////////////////

    public function admin_index() {

        $this->Paginator = $this->Components->load('Paginator');

        $this->Paginator->settings = [
            'Order' => [
                'recursive' => -1,
                'contain' => [
                ],
                'conditions' => [
                ],
                'order' => [
                    'Order.created' => 'DESC'
                ],
                'limit' => 20,
                'paramType' => 'querystring',
            ]
        ];
        $orders = $this->Paginator->paginate();

        $this->set(compact('orders'));
    }

////////////////////////////////////////////////////////////



public function pdf($id=null) {
 
$this->layout = "ajax";

App::import('Vendor', 'dompdf', array('file' => 'dompdf' . DS . 'dompdf_config.inc.php'));
  
//require_once(“pdf-template/template.php”);

$order = $this->Order->find('first', [
            'recursive' => 1,
            'conditions' => [
                'Order.id' => $id
            ]
]);
		
$this->set(compact('order'));
  
  $template = $this->render('admin_invoice'); 
 

$dompdf = new DOMPDF();
 
$dompdf->load_html($template);

$dompdf->set_paper('A4', 'landscape');

$dompdf->render();

//$dompdf->stream('invoice.pdf');

$invoice_id =  'samatra-'.date('Y',strtotime($order['Order']['created'])).'-'.$order['Order']['id']; 
  $output = $dompdf->output();
    //    file_put_contents('pdf/'.$invoice_id.'.pdf', $output);
		
		   file_put_contents('pdf/'.$invoice_id.'.pdf', $output);
		   
		   $dompdf->stream($invoice_id.'.pdf');
		   
exit;


	 $html =
        '<html><body>'.
        '<p>Put your html here, or generate it with your favourite '.
        'templating system.</p>'.
        '</body></html>';
		
		 $order = $this->Order->find('first', [
            'recursive' => 1,
            'conditions' => [
                'Order.id' => $id
            ]
        ]);
	     $html = $this->render('admin_invoice');
	 
        $dompdf = new DOMPDF();
        $papersize = 'A4';
        $orientation =  'landscape';
        $dompdf->load_html($html);
        $dompdf->set_paper($papersize, $orientation);
        $dompdf->render();
         $dompdf->output();
        $output = $dompdf->output();
     
	    file_put_contents(APP . 'webroot' . DS . 'invoice' . DS .'samatra-invoice-'.$id.'.pdf',$output);
	
		return true;
		  
 }

 
 
	  public function admin_invoice($id = null) {
		  $this->layout = "ajax";
		  
        $order = $this->Order->find('first', [
            'recursive' => 1,
            'conditions' => [
                'Order.id' => $id
            ]
        ]);
		
        if (empty($order)) {
            return $this->redirect(['action' => 'index']);
        }
		
        $this->set(compact('order'));
		
		$this->pdf($id);	
		
	 	//return $this->redirect($this->referer());
		 
		
    }
	
    public function admin_view($id = null) {
        $order = $this->Order->find('first', [
            'recursive' => 1,
            'conditions' => [
                'Order.id' => $id
            ]
        ]);
		
		$order = $this->Order->find('first', [
			'contain' => array('OrderItem.Product'),
            'recursive' => 1,
            'conditions' => [
                'Order.id' => $id
            ]
        ]);
				
				
        if (empty($order)) {
            return $this->redirect(['action' => 'index']);
        }
        $this->set(compact('order'));
    }

////////////////////////////////////////////////////////////

    public function admin_edit($id = null) {
        $this->Order->id = $id;
        if (!$this->Order->exists()) {
            throw new NotFoundException('Invalid order');
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Order->save($this->request->data)) {
                $this->Flash->flash('The order has been saved');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->flash('The order could not be saved. Please, try again.');
            }
        } else {
            $this->request->data = $this->Order->read(null, $id);
        }
    }

////////////////////////////////////////////////////////////

    public function admin_delete($id = null) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->Order->id = $id;
        if (!$this->Order->exists()) {
            throw new NotFoundException('Invalid order');
        }
        if ($this->Order->delete()) {
            $this->Flash->flash('Order deleted');
            return $this->redirect(['action' => 'index']);
        }
        $this->Flash->flash('Order was not deleted');
        return $this->redirect(['action' => 'index']);
    }

////////////////////////////////////////////////////////////

}
