<?php
$form = new ForumAnswerForm();

?>


<?php include_partial('answer/form', array('form' => $form, 'question_id' => $forum_questions->getId()))?>
