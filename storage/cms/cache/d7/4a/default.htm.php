<?php 
class Cms5ef0c1b4f4136084757075_ab7fea48a16ff7b3bf0f3a9287a6c971Class extends Cms\Classes\LayoutCode
{

// TODO wird diese funktion zweimal aufgerufen?
public function onMailSent() {
    
    $formVars = [
        'receivermail' => post('receivermail'),
        'receivername' => post('receivername'),
        'succeesstext' => post('succeesstext'),
        'receiverregard' => post('receiverregard'),
        'mailtemplate' => post('mailtemplate'),
        'name' => post('name'),
        'email' => post('email'),
        'regard' => post('regard'),
        'sendermessage' => post('message'),
    ];
    
    $formVars['receiverregard'] = str_replace("{{name}}", $formVars['name'], $formVars['receiverregard']);
    $formVars['receiverregard'] = str_replace("{{regard}}", $formVars['regard'], $formVars['receiverregard']);
    
    $buildOwnerMessage = function ($message) use ($formVars) {
        // TODO use email and name from backend or theme settings
        $message->to($formVars['receivermail'], $formVars['receivername']);
        $message->subject($formVars['receiverregard']);
    };

    // mail to site owner
    Mail::send($formVars['mailtemplate'], $formVars, $buildOwnerMessage);
      
    $this['result'] = $formVars['succeesstext'];
}
}
