<?php
/* Smarty version 3.1.33, created on 2020-05-08 22:51:22
  from 'C:\xampp\htdocs\tiendaLigaCaridad\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eb628baf389a1_20680006',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24128023a58e771ccacf30e0379f5a5de248bbc1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tiendaLigaCaridad\\themes\\classic\\templates\\page.tpl',
      1 => 1587058546,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eb628baf389a1_20680006 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21138712205eb628baedc266_10678741', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_5576833635eb628baedd877_78416469 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_991772505eb628baedcc43_69284575 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5576833635eb628baedd877_78416469', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_5433392675eb628baf30fb5_92354768 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_11373998085eb628baf32045_37116012 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_4829399765eb628baf30464_85953914 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5433392675eb628baf30fb5_92354768', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11373998085eb628baf32045_37116012', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_8377235eb628baf371c2_00493249 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_10051024445eb628baf36650_17162931 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8377235eb628baf371c2_00493249', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_21138712205eb628baedc266_10678741 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_21138712205eb628baedc266_10678741',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_991772505eb628baedcc43_69284575',
  ),
  'page_title' => 
  array (
    0 => 'Block_5576833635eb628baedd877_78416469',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_4829399765eb628baf30464_85953914',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_5433392675eb628baf30fb5_92354768',
  ),
  'page_content' => 
  array (
    0 => 'Block_11373998085eb628baf32045_37116012',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_10051024445eb628baf36650_17162931',
  ),
  'page_footer' => 
  array (
    0 => 'Block_8377235eb628baf371c2_00493249',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_991772505eb628baedcc43_69284575', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4829399765eb628baf30464_85953914', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10051024445eb628baf36650_17162931', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
