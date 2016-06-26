<?php

class domainthrottlemap extends phplistPlugin {
  public $name = "Group domains for throttling";
  public $coderoot = '';
  public $version = "0.1";
  public $authors = 'Michiel Dethmers';
  public $enabled = 1;
  public $description = 'Provide a grouping of domains for the purpose of domain throttling.';

  /** 
   * based on the domain, return a mapping for throttling
   * 
   * this means that domains that map to the same value will be grouped for throttling.
   */

  function throttleDomainMap ($domain) {
      
      switch (strtolower($domain)) {
    		case 'ameritect.net':
    		case 'att.net':
    		case 'bellsouth.net':
    		case 'flash.net':
    		case 'nvbell.net':
    		case 'pacbell.net':
    		case 'prodigy.net':
    		case 'rocketmail.com':
    		case 'sbcglobal.net':
    		case 'snet.net':
    		case 'swbell.net':
    		case 'wans.net':
    		case 'yahoo.at':
    		case 'yahoo.be':
    		case 'yahoo.bg':
    		case 'yahoo.ca':
    		case 'yahoo.cl':
    		case 'yahoo.co.hu':
    		case 'yahoo.co.id':
    		case 'yahoo.co.in':
    		case 'yahoo.co.kr':
    		case 'yahoo.co.nz':
    		case 'yahoo.co.th':
          	case 'yahoo.co.uk':
    		case 'yahoo.co.za':
    		case 'yahoo.com':
    		case 'yahoo.com.ar':
    		case 'yahoo.com.au':
    		case 'yahoo.com.br':
    		case 'yahoo.com.co':
    		case 'yahoo.com.hr':
		case 'yahoo.com.hx':
    		case 'yahoo.com.mx':
    		case 'yahoo.com.my':
    		case 'yahoo.com.pe':
    		case 'yahoo.com.ph':
    		case 'yahoo.com.sg':
    		case 'yahoo.com.tr':
    		case 'yahoo.cz':
    		case 'yahoo.de':
    		case 'yahoo.dk':
    		case 'yahoo.ee':
    		case 'yahoo.es':
    		case 'yahoo.fi':
    		case 'yahoo.fr':
    		case 'yahoo.gr':
    		case 'yahoo.hr':
    		case 'yahoo.hu':
    		case 'yahoo.ie':
    		case 'yahoo.in':
    		case 'yahoo.lt':
    		case 'yahoo.nl':
    		case 'yahoo.no':
    		case 'yahoo.pl':
    		case 'yahoo.pt':
    		case 'yahoo.ri':
    		case 'yahoo.se':
    		case 'yahoo.si':
    		case 'yahoogroups.co.kr':
    		case 'yahoogroups.com.cn':
    		case 'yahoogroups.com.sg':
    		case 'yahoogroups.com.tw':
    		case 'yahoogrupper.dk':
    		case 'yahoogruppi.it':
    		case 'yahooxtra.co.nz':
    		case 'ymail.com':
    		case 'y7mail.com':
    			  return "Yahoo"; break;	
      		case 'onedrive.net':
      		case 'windowsmobile.co.uk':
      		case 'xbox.com':
      		case 'onedrive.org':
      		case 'windowsmobile.org':
      		case 'xbox.co.uk':
      		case 'onedrive.co':
      		case 'windowsmobile.co':
      		case 'xbox.org':
      		case 'onedrive.eu':
      		case 'windowsphone.com':
      		case 'xbox.co':
      		case 'skype.com':
      		case 'windowsmobile.eu':
      		case 'xbox.eu':
      		case 'skype.org':
      		case 'windowsphone.co.uk':
      		case 'xbox360.com':
      		case 'skype.net':
      		case 'windowsphone.org':
      		case 'xbox360.co.uk':
      		case 'skype.co.uk':
      		case 'windowsphone.co':
      		case 'xbox360.co':
      		case 'skype.co':
      		case 'windowsphone.net':
      		case 'xbox360.eu':
      		case 'skype.eu':
      		case 'zune.com':
      		case 'xbox360.org':
      		case 'outlook.com':
      		case 'zune.co.uk':
      		case 'xboxone.com':
      		case 'outlook.org':
      		case 'zune.org':
      		case 'xboxone.co.uk':
      		case 'outlook.co':
      		case 'zune.net':
      		case 'xboxone.eu':
      		case 'outlook.eu':
      		case 'zune.co':
      		case 'xboxone.eu':
      		case 'windowsmobile.com':
      		case 'zune.eu':
      		case 'office.com':
      		case 'onedrive.co.uk':
      		case 'visualstudio.net':
      		case 'visualstudio.eu':
      		case 'onedrive.com':
      		case 'skydrive.com':
      		case 'visualstudio.co.uk':
      		case 'skydrive.co':
      		case 'visualstudio.co':
      		case 'visualstudio.com':
      		case 'microsoftvisualstudio.net':
      		case 'microsoftvisualstudio.com':
      		case 'sqlserver.net':
      		case 'microsoftsqlserver.com':
      		case 'microsoftsilverlight.net':
      		case 'microsoftsilverlight.org':
      		case 'live.eu':
      		case 'live.se':
      		case 'internetexplorer.co':
      		case 'microsoftsilverlight.com':
      		case 'live.org':
      		case 'internetexplorer.com':
      		case 'ie8.co':
      		case 'live.co':
      		case 'live.com':
      		case 'hotmail.co':
      		case 'live.net':
      		case 'hotmail.org':
      		case 'hotmail.eu':
      		case 'live.co.uk':
      		case 'hotmail.net':
      		case 'hotmail.co.uk':
      		case 'bingbar.com':
      		case 'hotmail.com':
      		case 'bingtoolbar.com':
      		case 'bingbar.net':
      		case 'bing.co':
      		case 'bing.co.uk':
      		case 'bing.net':
      		case 'bing.com':
      		case 'microsoft.co':
      		case 'microsoft.nl':
      		case 'microsoft.co.uk':
      		case 'microsoft.net':
      		case 'microsoft.org':
      		case 'microsoft.com':
      		case 'hotmail.nl':
      		case 'hotmail.be':
      		case 'msn.com':
      		case 'windowslive.com':
      		case 'live.nl':
      		case 'live.com.au':
      			return "Microsoft"; break;
		case 'onet.pl':
		case 'vp.pl':
		case 'op.pl':
		case 'onet.eu':
		case 'spoko.pl':
		case 'autograf.pl':
		case 'vip.onet.pl':
		case 'poczta.onet.pl':
		case 'onet.com.pl':
		case 'opoczta.pl':
		case 'amorki.pl':
		case 'buziaczek.pl':
		case 'pseudonim.pl':
			return "Onet.pl"; break;
            
          
          /* 
           * add more mappings here with the following structure
           * 
           * 
           * --------------------
           * case 'domain':
           * case 'otherdomain':
           *    return 'Main domain or provider name'; break;
           * ---------------------
           * 
           *   do not forget the "break" on the last line
           * 
           */
          


      }
      
      
      
      return false;
  }

    public function dependencyCheck()
    {
        global $plugins;

        return array(
            'phpList version 3.2.4 or later' => version_compare(VERSION, '3.2.3') > 0,
        );
    }
 

}
