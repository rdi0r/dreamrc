<?php use_stylesheet('job.css') ?>    <?php use_helper('Text') ?>    
<div id="job">      <h1><?php echo $JobeetJob->getCompany() ?></h1>      
<h2><?php echo $JobeetJob->getLocation() ?></h2>      <h3>        
<?php echo $JobeetJob->getPosition() ?>        
<small> - <?php echo $JobeetJob->getType() ?></small>      </h3>      
<?php if ($JobeetJob->getLogo()): ?>        <div class="logo">          
<a href="<?php echo $JobeetJob->getUrl() ?>">           
 <img src="/uploads/jobs/<?php echo $JobeetJob->getLogo() ?>"  alt="<?php echo $JobeetJob->getCompany() ?> logo" /></a>
 </div>
 <?php endif; ?>      
 <div class="description">        
 <?php echo simple_format_text($JobeetJob->getDescription()) ?>      </div>      
 <h4>How to apply?</h4>     
 <p class="how_to_apply">
 <?php echo $JobeetJob->getHowToApply() ?></p>     
  <div class="meta">
  <small>publicado el: <?php echo $JobeetJob->getCreatedAt('d/m/Y') ?>
  </small></div>
<div style="padding: 20px 0"><a href="<?php echo url_for('job_edit', $JobeetJob) ?>">Editar</a>      </div>    </div>