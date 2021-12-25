<?php /* Smarty version 2.6.31, created on 2021-12-23 13:25:16
         compiled from page_submitban.tpl */ ?>
<div class="row">
	<div class="col-lg-12 grid-margin">
		<div class="card">
			<div class="card-body">
				<h4 class="lead">Protest a ban</h4>
				<p>
					Here you will be able to submit a ban for a player who is breaking the rules of the gameserver. When submitting a ban we request you to fill out all the fields to be as descriptive as possible in your comments. This will ensure that your ban submission is processed much faster.<br /><br />
					For a short explination on how to create a demo, click <a href="javascript:void(0)" onclick="ShowBox('How To Record A Demo', 'While you are spectating the offending player, press the ` key on your keyboard. Then type record [demoname] and hit enter. Also type sb_status for extra information in SteamBans servers. The file will be in your mod folder.', 'blue', '', true);">here</a><br /><br />
				</p>
				<?php echo '
				<style>
					.form-group label{text-align:right;}
				</style>
				'; ?>

				<form action="index.php?p=submit" method="post" enctype="multipart/form-data">
					<input type="hidden" name="subban" value="1">
					<p class="card-description">
						Ban Details
					</p>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Players SteamID:</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="SteamID" value="<?php echo $this->_tpl_vars['STEAMID']; ?>
"/>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Players IP:</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="BanIP" value="<?php echo $this->_tpl_vars['ban_ip']; ?>
"/>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Players Nick Name<span class="text-danger">*</span>:</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="PlayerName" value="<?php echo $this->_tpl_vars['player_name']; ?>
"/>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Comments<span class="text-danger">*</span>:<br/>
								(Please write down a descriptive comment. So NO comments like: "hacking")</td></label>
								<div class="col-sm-9">
									<textarea name="BanReason" cols="30" rows="5" class="form-control"><?php echo $this->_tpl_vars['ban_reason']; ?>
</textarea>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Your Name:</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="SubmitName" value="<?php echo $this->_tpl_vars['subplayer_name']; ?>
"/>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Your Email<span class="text-danger">*</span>:</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="EmailAddr" value="<?php echo $this->_tpl_vars['player_email']; ?>
"/>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Server<span class="text-danger">*</span>:</label>
								<div class="col-sm-9">
									<select class="form-control" name="server">
									<?php $_from = ($this->_tpl_vars['server_list']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['server']):
?>
									<option value="<?php echo $this->_tpl_vars['server']['sid']; ?>
" <?php if ($this->_tpl_vars['server_selected'] == $this->_tpl_vars['server']['sid']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['server']['hostname']; ?>
</option>
									<?php endforeach; endif; unset($_from); ?>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Upload Demo:</label>
								<div class="col-sm-9">
									<input type="file" class="form-control" name="demo_file" value="<?php echo $this->_tpl_vars['player_email']; ?>
"/>
									<p>Note: Only DEM, <a href="http://www.winzip.com" target="_blank">ZIP</a>, <a href="http://www.rarlab.com" target="_blank">RAR</a>, <a href="http://www.7-zip.org" target="_blank">7Z</a>, <a href="http://www.bzip.org" target="_blank">BZ2</a> or <a href="http://www.gzip.org" target="_blank">GZ</a> allowed.	
									</td>
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label"><span class="text-danger">*</span> = Mandatory Field</label>
								<div class="col-sm-9">
									<input type="submit" name="save" class="btn btn-success" value="Submit">
								</div>
							</div>
						</div>
					</div>
				</form>
				<p class="lead">What happens if someone gets banned?</p>
				<p>
					If someone gets banned, the specific STEAMID or IP will be included in this SourceBans database and everytime this player tries to connect to one of our servers he/she will be blocked and will receive a message that they are blocked by SourceBans. 
				</p>
			</div>
		</div>
	</div>
</div>