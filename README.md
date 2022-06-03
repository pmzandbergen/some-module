# Some_Module
This is a Magento 2 module for the following PR:
https://github.com/magento/magento2/pull/35572

## Reproduce
1. Use a vanilla Magento 2.4.4 installation (Note: There is no need to run the installation / setup a database)
2. Copy the module to `app/code` (`app/code/Some/Module/...`)
3. Enable the module (e.g. `bin/magento module:enable Some_Module`)
4. Run compiler (e.g. `bin/magento setup:di:compile`)

You will get the following error:
```
% bin/magento setup:di:compile                        
Compilation was started.
Interceptors generation... 4/9 [============>---------------]  44% 4 secs 218.0 MiB
In Generator.php line 140:
                                                                                                                                                                                                                
  Type "mixed" cannot be nullable                                                                                                                                                                               
  Class Some\Module\Model\TestClass\Interceptor generation error: The requested class did not generate properly, because the 'generated' directory permission is read-only. If --- after running the 'bin/mage  
  nto setup:di:compile' CLI command when the 'generated' directory permission is set to write --- the requested class did not generate properly, then you must add the generated class object to the signature  
   of the related construct method, only.                                                                                                                                                                       
                                                                                                                                                                                                                

setup:di:compile
```

For a fix see the PR.
