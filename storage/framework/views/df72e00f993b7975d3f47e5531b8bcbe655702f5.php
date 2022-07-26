<!doctype html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo e($boxJsonValues['texts']['title']); ?></title>
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <link rel="stylesheet" href="https://unpkg.com/tippy.js@6/dist/tippy.css" />
</head>

<body
  x-data="{
    walletAddress: '<?php echo e($boxJsonValues['addr']); ?>',
    amount: '<?php echo e($boxJsonValues['amount']); ?>',
    txUrl: '<?php echo e($boxJsonValues['tx_url']); ?>',
  }"
>
  <input type="hidden" x-model="walletAddress">
  <input type="hidden" x-model="amount">
  <input type="hidden" x-model="txUrl">

  <div class="flex flex-col justify-center min-h-screen py-12 bg-gray-50 sm:px-6 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-2xl">
      
      <?php if($laravelCryptoPaymentGateway->showLogo): ?>
        <img class="w-auto h-12 mx-auto" src="<?php echo e(asset($laravelCryptoPaymentGateway->logo)); ?>" alt="<?php echo e(asset($laravelCryptoPaymentGateway->logo)); ?>">
      <?php endif; ?>
      
      <?php if(!$boxIsPaid): ?>
        <div class="mt-4 text-center">
          
          <span class="block mt-1 mb-2 font-bold"><?php echo $localisation["payment"]; ?></span>
          <?php if(is_array($laravelCryptoPaymentGateway->enabledCoinImages) && count($laravelCryptoPaymentGateway->enabledCoinImages) > 1): ?>
            <?php $__currentLoopData = $laravelCryptoPaymentGateway->enabledCoinImages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $coin => $imageData): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <a
                href="?<?php echo e($queryStrings ? $queryStrings.'&' : ''); ?>coin=<?php echo e($coin); ?>"
                x-data="{ tooltip: '<?php echo e(addslashes(str_replace("%coinName%", ucfirst($coin), $localisation["pay_in"]))); ?>' }"
                x-tooltip="tooltip"
                class="inline-block p-1 border hover:border-gray-400 <?php echo e(request()->query('coin') == $coin ? 'border rounded border-gray-800' : ''); ?>"
              >
                <img class="h-14" src="data:image/png;base64,<?php echo e($imageData); ?>" alt="<?php echo e(addslashes(str_replace("%coinName%", ucfirst($coin), $localisation["pay_in"]))); ?>">
              </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php endif; ?>
        </div>
      <?php endif; ?>

      <h2 class="mt-6 text-3xl font-medium text-center text-gray-900">
          <?php echo e($boxJsonValues['texts']['title']); ?>

      </h2>
    </div>
    
    
    <?php if($boxIsPaid): ?>

      
      <?php if($boxJsonValues['status'] == 'payment_received'): ?>

        <div class="mt-4 sm:mx-auto sm:w-full sm:max-w-2xl">
          <div class="px-4 py-8 mx-2 bg-white rounded-lg shadow sm:px-10">

            
            <div class="float-right px-2 py-1 -mt-8 -mr-4 text-sm font-medium text-white bg-gray-600 rounded-tr-lg whitespace-nowrap sm:-mt-8 sm:-mr-10 abslute">
              <?php echo e($boxJsonValues['amountusd']); ?> <span class="font-extralight">USD</span>
            </div>

            <div class="grid grid-cols-12 gap-y-4">
              <div class="items-center col-span-12 space-y-2 sm:flex sm:col-span-3">
                <div class="text-center text-9xl font-extralight">
                  <i
                    class="text-green-500 fas fa-check-circle"
                    x-data="{ tooltip: '<?php echo e(addslashes('Copy Transaction ID')); ?>' }"
                    x-tooltip="tooltip"
                    x-on:click="$clipboard(txUrl); tooltip = '<?php echo e(addslashes($boxJsonValues['texts']['copied'])); ?>'"
                  ></i>
                </div>
              </div>
              
              <div class="col-span-12 space-y-2 sm:col-span-9">
                <div class="text-2xl font-extrabold text-center">
                  <span
                    x-data="{ tooltip: '<?php echo e(addslashes($boxJsonValues['texts']['copy_amount'])); ?>' }"
                    x-tooltip="tooltip"
                    x-on:click="$clipboard(amount); tooltip = '<?php echo e(addslashes($boxJsonValues['texts']['copied'])); ?>'"
                    class="cursor-pointer"
                  >
                    <?php echo e($boxJsonValues['amount']); ?>

                  </span>
                  <span class="font-extralight"><?php echo e($boxJsonValues['coinlabel']); ?></span>
                </div>
  
                <div class="text-2xl text-center font-extralight">
                  <?php echo e($boxJsonValues['texts']['payment_successful']); ?>

                </div>
  
                <div class="text-xl text-center font-extralight">
                  <?php echo e($boxJsonValues['texts']['received_on']); ?> <?php echo e($boxJsonValues['date']); ?>

                </div>
              </div>

              <div class="col-span-12 space-y-2 sm:col-span-12">
                <div class="space-y-2 sm:flex sm:space-x-4 sm:space-y-0 ">
                  <a 
                    href="<?php echo e($boxJsonValues['tx_url']); ?>"
                    target="_blank"
                    class="flex justify-center w-full px-4 py-2 text-sm font-medium text-blue-600 bg-white border border-blue-600 rounded-md shadow-sm sm:flex-1 hover:bg-blue-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
                    >
                    <?php echo e($boxJsonValues['texts']['btn_res']); ?>

                  </a>
                  
                  
                  <?php if($laravelCryptoPaymentGateway->redirect): ?>
                    <a 
                      href="<?php echo e($laravelCryptoPaymentGateway->redirect); ?>"
                      class="flex justify-center w-full px-4 py-2 text-sm font-medium text-black bg-gray-300 border border-gray-400 rounded-md shadow-sm sm:flex-1 hover:bg-gray-400 hover:text-black focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500"
                      >
                      <?php echo e(__('Close')); ?>

                    </a>
                  <?php endif; ?>
                </div>
              </div>
            </div> 

          </div>
        </div>

      
      <?php elseif($boxJsonValues['status'] == 'payment_received_unrecognised'): ?>

        <div class="mt-4 sm:mx-auto sm:w-full sm:max-w-2xl">
          <div class="px-4 py-8 mx-2 bg-white rounded-lg shadow sm:px-10">

            
            <div class="float-right px-2 py-1 -mt-8 -mr-4 text-sm font-medium text-white bg-gray-600 rounded-tr-lg whitespace-nowrap sm:-mt-8 sm:-mr-10 abslute">
              <?php echo e($boxJsonValues['amountusd']); ?> <span class="font-extralight">USD</span>
            </div>
            
            <div class="grid grid-cols-12 gap-y-4">
              <div class="items-center col-span-12 space-y-2 sm:flex sm:col-span-3">
                <div class="text-center text-9xl font-extralight">
                  <i
                    class="text-yellow-500 fas fa-exclamation-triangle"
                    x-data="{ tooltip: '<?php echo e(addslashes('Copy Transaction ID')); ?>' }"
                    x-tooltip="tooltip"
                    x-on:click="$clipboard(txUrl); tooltip = '<?php echo e(addslashes($boxJsonValues['texts']['copied'])); ?>'"
                  ></i>
                </div>
              </div>

              <div class="col-span-12 space-y-2 sm:col-span-9">
                <div class="text-2xl font-extrabold text-center">
                  <span
                    x-data="{ tooltip: '<?php echo e(addslashes($boxJsonValues['texts']['copy_amount'])); ?>' }"
                    x-tooltip="tooltip"
                    x-on:click="$clipboard(amount); tooltip = '<?php echo e(addslashes($boxJsonValues['texts']['copied'])); ?>'"
                    class="cursor-pointer"
                  >
                    <?php echo e($boxJsonValues['amount']); ?>

                  </span>
                  <span class="font-extralight"><?php echo e($boxJsonValues['coinlabel']); ?></span>
                </div>
                
                <div class="text-xl text-center font-extralight">
                  <?php echo e($boxJsonValues['err'] ?? __('An incorrect bitcoin amount has been received')); ?>

                </div>
  
                <div class="text-xl text-center font-extralight">
                  <?php echo e($boxJsonValues['texts']['received_on']); ?> <?php echo e($boxJsonValues['date']); ?>

                </div>
  
                <div class="text-xl text-center font-extralight">
                  <?php echo e(__('Please contact support for resolution.')); ?>

                </div>  
              </div>

              <div class="col-span-12 space-y-2 sm:col-span-12">
                <div class="space-y-2 sm:flex sm:space-x-4 sm:space-y-0">
                  <a 
                    href="<?php echo e($boxJsonValues['tx_url']); ?>"
                    target="_blank"
                    class="flex justify-center w-full px-4 py-2 text-sm font-medium text-blue-600 bg-white border border-blue-600 rounded-md shadow-sm sm:flex-1 hover:bg-blue-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
                    >
                    <?php echo e($boxJsonValues['texts']['btn_res']); ?>

                  </a>

                  
                  <?php if($laravelCryptoPaymentGateway->redirect): ?>
                    <a 
                      href="<?php echo e($laravelCryptoPaymentGateway->redirect); ?>"
                      class="flex justify-center w-full px-4 py-2 text-sm font-medium text-black bg-gray-300 border border-gray-400 rounded-md shadow-sm sm:flex-1 hover:bg-gray-400 hover:text-black focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500"
                      >
                      <?php echo e(__('Close')); ?>

                    </a>
                  <?php endif; ?>      
                </div>          
              </div>
            </div>             
          </div>
        </div>

      <?php else: ?>

        
        <div class="mt-4 sm:mx-auto sm:w-full sm:max-w-2xl">
          <div class="px-4 py-8 mx-2 bg-white rounded-lg shadow sm:px-10">
            <div class="space-y-2">
              <div class="font-medium text-center text-red-600 text-md">
                <?php echo e(__("Sorry, we couldn't complete your request. Please try again in a moment.")); ?>

              </div>

              
              <?php if($laravelCryptoPaymentGateway->redirect): ?>
                <a 
                  href="<?php echo e($laravelCryptoPaymentGateway->redirect); ?>"
                  class="flex justify-center w-full px-4 py-2 text-sm font-medium text-black bg-gray-300 border border-gray-400 rounded-md shadow-sm hover:bg-gray-400 hover:text-black focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500"
                  >
                  <?php echo e(__('Close')); ?>

                </a>
              <?php endif; ?>
            </div>
          </div>
        </div>

      <?php endif; ?>


    <?php else: ?>

      
      <div class="mt-4 sm:mx-auto sm:w-full sm:max-w-2xl">
        <div class="px-4 py-8 mx-2 bg-white rounded-lg shadow sm:px-10">

          
          <div class="float-right px-2 py-1 -mt-8 -mr-4 text-sm font-medium text-white bg-gray-600 rounded-tr-lg whitespace-nowrap sm:-mt-8 sm:-mr-10 abslute">
            <?php echo e($boxJsonValues['amountusd']); ?> <span class="font-extralight">USD</span>
          </div>
          
          <div class="grid grid-cols-12 gap-y-4">
            <div class="items-center col-span-12 space-y-2 sm:flex sm:col-span-3">
              <div
                class="text-center sm:text-left"
                x-data="{ tooltip: '<?php echo e(addslashes($boxJsonValues['texts']['btn_copy'])); ?>' }"
                x-tooltip="tooltip"
                x-on:click="tooltip = ''"
              >
                <span
                  class="inline-block cursor-pointer"
                  x-data="{ tooltip: '<?php echo e(addslashes($boxJsonValues['texts']['qrcode'])); ?>' }"
                  x-tooltip.delay.1500="tooltip"
                  x-on:click="$clipboard(walletAddress); tooltip = '<?php echo e(addslashes($boxJsonValues['texts']['copied'])); ?>'"
                >
                  <?php echo $walletQRCode; ?>

                </span>
              </div>    
            </div>
            
            <div class="col-span-12 space-y-2 sm:col-span-9">
              <div class="text-2xl font-extrabold text-center">
                <span
                  x-data="{ tooltip: '<?php echo e(addslashes($boxJsonValues['texts']['copy_amount'])); ?>' }"
                  x-tooltip="tooltip"
                  x-on:click="$clipboard(amount); tooltip = '<?php echo e(addslashes($boxJsonValues['texts']['copied'])); ?>'"
                  class="cursor-pointer"
                >
                  <?php echo e($boxJsonValues['amount']); ?>

                </span>
                <span class="font-extralight"><?php echo e($boxJsonValues['coinlabel']); ?></span>
              </div>

              <div class="text-xs text-center">
                <?php echo e($boxJsonValues['texts']['intro2']); ?>

              </div>
  
              <div class="p-1 text-sm font-extrabold text-center border border-gray-400 rounded">            
                <a
                  href="<?php echo e($boxJsonValues['wallet_url']); ?>"
                  x-data="{ tooltip: '<?php echo e(addslashes($boxJsonValues['texts']['btn_wallet'])); ?>' }"
                  x-tooltip="tooltip"
                  class="text-blue-700 hover:text-blue-500"
                >
                  <?php echo e($boxJsonValues['addr']); ?> 
                </a>
                            
                <i
                  class="ml-3 cursor-pointer far fa-copy"
                  x-data="{ tooltip: '<?php echo e(addslashes($boxJsonValues['texts']['btn_copy'])); ?>' }"
                  x-tooltip="tooltip"
                  x-on:click="$clipboard(walletAddress); tooltip = '<?php echo e(addslashes($boxJsonValues['texts']['copied'])); ?>'"
                ></i>
  
                <a href="<?php echo e($boxJsonValues['wallet_url']); ?>">
                  <i
                    class="ml-3 cursor-pointer fas fa-external-link-alt"
                    x-data="{ tooltip: '<?php echo e(addslashes($boxJsonValues['texts']['btn_wallet_hint'])); ?>' }"
                    x-tooltip="tooltip"                
                  ></i>
                </a>
              </div>
            </div>

            <div class="col-span-12 space-y-2 sm:col-span-12">
              <div class="mt-0">
                <button 
                  type="submit"
                  class="flex justify-center w-full px-4 py-2 text-sm font-medium text-blue-600 bg-white border border-blue-600 rounded-md shadow-sm hover:bg-blue-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
                  >
                  <i class="mr-2 fas fa-spinner fa-pulse"></i>
                  <?php echo e($boxJsonValues['texts']['payment_wait']); ?>

                </button>
              </div>         
              <div class="text-sm text-center">
                <?php echo e($boxJsonValues['texts']['intro3']); ?>

              </div> 
            </div>
          </div>             
        </div>

        
        <?php if(isset($box_template_options['submit_btn']) && $box_template_options['submit_btn'] == true): ?>
          <div class="m-4">
            <a 
              href="?<?php echo e($queryStringsFull); ?>"
              x-data="{ tooltip: '<?php echo e(addslashes($boxJsonValues['texts']['btn_wait_hint'])); ?>' }"
              x-tooltip="tooltip"
              class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
              >
              <i class="mt-1 mr-2 fas fa-angle-double-right"></i>
              <?php echo e(__('Click Here if you have already sent :coinname', ['coinname' => $boxJsonValues['coinname']])); ?>

              <i class="mt-1 ml-2 fas fa-angle-double-right"></i>
            </a>
          </div>
        <?php endif; ?>
        
        <div class="flex m-4 mt-3 space-y-0 text-center sm:space-x-4">
          
          <?php if($laravelCryptoPaymentGateway->showCancelButton && $laravelCryptoPaymentGateway->previous): ?>
            <div class="flex flex-1">
              <div class="w-full <?php echo e($laravelCryptoPaymentGateway->showLanguageBox ? 'text-left' : ''); ?>">
                <a
                  href="?<?php echo e($queryStringsFull ? $queryStringsFull.'&' : ''); ?>cancel-payment=<?php echo e('yes'); ?>"
                  class="justify-center px-4 py-1.5 text-sm font-medium text-gray-700 bg-gray-100 border border-gray-300 rounded-md shadow-sm hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300"
                  onclick="return confirm('<?php echo e(__('Cancel Payment?')); ?>')"
                  >
                  <i class="mt-1 mr-2 fas fa-angle-double-left"></i>
                  <?php echo e(__('Cancel')); ?>

                </a>
              </div>
            </div>
          <?php endif; ?>
          
          <?php if($laravelCryptoPaymentGateway->showLanguageBox): ?>
            <div class="flex flex-1 mt-0">
              <div class="w-full <?php echo e($laravelCryptoPaymentGateway->showCancelButton && $laravelCryptoPaymentGateway->previous ? 'text-right' : ''); ?>">               
                <?php echo display_language_box('en', 'cryptolang', true); ?>

              </div>
            </div>
          <?php endif; ?>
        </div>
      </div>
    <?php endif; ?>
    
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@ryangjchandler/alpine-clipboard@2.x.x/dist/alpine-clipboard.js" defer></script>
  <script src="https://cdn.jsdelivr.net/npm/@ryangjchandler/alpine-tooltip@0.x.x/dist/cdn.min.js" defer></script>
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <?php if(!$boxIsPaid): ?>
    <script>
      window.setInterval('refresh()', 15000); // 15000 milliseconds (15 seconds)
      function refresh() {
        window.location.reload();
      }
    </script>
  <?php endif; ?>

  <?php if($boxIsPaid && $boxJsonValues['status'] == 'payment_received' && $laravelCryptoPaymentGateway->redirect): ?>
    <script>
      window.setTimeout(function() { 
        window.location = '<?php echo e($laravelCryptoPaymentGateway->redirect); ?>'; 
      }, 3000);
    </script>
  <?php endif; ?>
</body>

</html><?php /**PATH E:\xampp\htdocs\Lidata\vendor\victorybiz\laravel-crypto-payment-gateway\src/../resources/views/paymentbox-compact.blade.php ENDPATH**/ ?>