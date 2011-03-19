<?php
    return array(
        'AbstractController'                => 'lib/Controller/AbstractController.php',
        'AbstractBasicController'           => 'lib/Controller/AbstractBasicController.php',
        'ControllerException'               => 'lib/Controller/ControllerException.php',
        'Frontcontroller'                   => 'lib/Controller/FrontController.php',
        'Database'                          => 'lib/Database/Database.php',
        'DatabaseException'                 => 'lib/Database/DatabaseException.php',
        'IDatabaseAdapter'                  => 'lib/Database/IDatabaseAdapter.php',
        'IDatabaseQuery'                    => 'lib/Database/IDatabaseQuery.php',
        'IDatabaseResult'                   => 'lib/Database/IDatabaseResult.php',
        'Debug'                             => 'lib/Debugging/Debug.php',
        'Log'                               => 'lib/Debugging/Log.php',
        'Event'                             => 'lib/Event/Event.php',
        'EventArgs'                         => 'lib/Event/EventArgs.php',
        'EventHandler'                      => 'lib/Event/EventDandler.php',
        'EventHandlerChain'                 => 'lib/Event/EventHandlerChain.php',
        'EventManager'                      => 'lib/Event/EventManager.php',
        'IEventHandler'                     => 'lib/Event/IEventhandler.php',
        'FileSystemException'               => 'lib/Filesystem/FileSystemException.php',
        'ConfigFile'                        => 'lib/Filesystem/ConfigFile/ConfigFile.php',
        'ConfigFileException'               => 'lib/Filesystem/ConfigFile/ConfigFileException.php',
        'EncryptedConfigFile'               => 'lib/Filesystem/ConfigFile/EncryptedConfigFile.php',
        'IConfigFile'                       => 'lib/Filesystem/ConfigFile/IConfigFile.php',
        'INIConfigFile'                     => 'lib/Filesystem/ConfigFile/INIConfigFile.php',
        'Path'                              => 'lib/Filesystem/Path.php',
        'Captcha'                           => 'lib/Image/Captcha.php',
        'ImageException'                    => 'lib/Image/ImageException.php',
        'ImageManipulation'                 => 'lib/Image/ImageManipulate.php',
        'AbstractModel'                     => 'lib/Models/AbstractModel.php',
        'Categories'                        => 'lib/Models/CategoriesModel.php',
        'Comments'                          => 'lib/Models/CommentsModel.php',
        'Config'                            => 'lib/Models/ConfigModel.php',
        'Contents'                          => 'lib/Models/ContentsModel.php',
        'Lang'                              => 'lib/Models/LangModel.php',
        'ModelException'                    => 'lib/Models/ModelException.php',
        'Session'                           => 'lib/Models/SessionModel.php',
        'User'                              => 'lib/Models/UserModel.php',
        'IPBase'                            => 'lib/Models/IPLockModel.php',
        'AbstractStaticType'                => 'lib/Models/StaticTypes/AbstractStaticType.php',
        'StaticDouble'                      => 'lib/Models/StaticTypes/StaticDouble.php',
        'StaticInteger'                     => 'lib/Models/StaticTypes/StaticInteger.php',
        'StaticString'                      => 'lib/Models/StaticTypes/StaticString.php',
        'Stack'                             => 'lib/Util/Stack.php',
        'Registry'                          => 'lib/Util/Registry.php',
        'Listing'                           => 'lib/Util/Listing.php',
        'Autoloader'                        => 'lib/Util/Autoloader.php',
        'Smtp'                              => 'lib/Network/Smtp.php',
        'Http'                              => 'lib/Network/Http/Http.php',
        'HttpHeader'                        => 'lib/Network/Http/HttpHeader.php',
        'HttpCookie'                        => 'lib/Network/Http/HttpCookie.php',
        'AbstractHttpRequestMethod'         => 'lib/Network/Http/AbstractHttpRequestMethod.php',
        'AbstractHttpAuthentication'        => 'lib/Network/Http/AbstractHttpAuthentication.php',
        'NetworkException'                  => 'lib/Network/NetworkException.php',
        'IRequest'                          => 'lib/Request/IRequest.php',
        'Request'                           => 'lib/Request/Request.php',
        'RequestException'                  => 'lib/Request/RequestException.php',
        'DefaultRouter'                     => 'lib/Request/Router/DefaultRouter.php',
        'IRouter'                           => 'lib/Request/Router/IRouter.php',
        'StaticRoute'                       => 'lib/Request/Router/StaticRoute.php',
        'Response'                          => 'lib/Response/Response.php',
        'ResponseException'                 => 'lib/Response/ResponseException.php',
        'BBCode'                            => 'lib/Text/BBCode.php',
        'bhm'                               => 'lib/Text/bhm.php',
        'Text'                              => 'lib/Text/Text.php',
        'TextException'                     => 'lib/Text/TextException.php',
        'ICrypter'                          => 'lib/Text/Crypter/ICrypter.php',
        'AESCrypter'                        => 'lib/Text/Crypter/aescrypter.php',
        'GeSHi'                             => 'lib/Text/geshi/geshi.php',
        'StringParser_BBCode'               => 'lib/Text/stringparser/stringparser_bbcode.php',
        'Textile'                           => 'lib/Text/textile/textile.php',
        'IValidator'                        => 'lib/Validators/IValidator.php',
        'EmailValidator'                    => 'lib/Validators/EmailValidator.php',
        'AbstractViewHelper'                => 'lib/View/AbstractViewHelper.php',
        'Design'                            => 'lib/View/Design.php',
        'Template'                          => 'lib/View/Template.php',
        'ViewException'                     => 'lib/View/ViewException.php',
        'TemplateParser'                    => 'lib/View/TemplateEngine/templateparser.php',
        'ITag'                              => 'lib/View/TemplateEngine/ITag.php',
        'NodeList'                          => 'lib/View/TemplateEngine/Nodes/NodeList.php',
        'Node'                              => 'lib/View/TemplateEngine/Nodes/Nodes.php',
        'RootNode'                          => 'lib/View/TemplateEngine/Nodes/Nodes.php',
        'SingleNode'                        => 'lib/View/TemplateEngine/Nodes/Nodes.php',
        'TextNode'                          => 'lib/View/TemplateEngine/Nodes/Nodes.php',
        'HeadViewHelper'                    => 'lib/View/ViewHelper/HeadviewHelper.php',
        'MenuViewHelper'                    => 'lib/View/ViewHelper/MenuviewHelper.php',
        'PagebrowserViewHelper'             => 'lib/View/ViewHelper/PagebrowserViewHelper.php'
    );
?>
