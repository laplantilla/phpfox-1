<upgrade>
	<phrases>
		<phrase>
			<module_id>group</module_id>
			<version_id>2.0.0rc11</version_id>
			<var_name>user_setting_can_access_groups</var_name>
			<added>1260286121</added>
			<value>Can browse and view group module?</value>
		</phrase>
		<phrase>
			<module_id>group</module_id>
			<version_id>2.0.0rc11</version_id>
			<var_name>user_setting_can_create_group</var_name>
			<added>1260329551</added>
			<value>Can create a group?</value>
		</phrase>
		<phrase>
			<module_id>group</module_id>
			<version_id>2.0.0rc11</version_id>
			<var_name>user_setting_can_view_secret_group</var_name>
			<added>1260331039</added>
			<value>Can view and browse secret/private groups?</value>
		</phrase>
	</phrases>
	<user_group_settings>
		<setting>
			<is_admin_setting>0</is_admin_setting>
			<module_id>group</module_id>
			<type>boolean</type>
			<admin>1</admin>
			<user>1</user>
			<guest>1</guest>
			<staff>1</staff>
			<module>group</module>
			<ordering>0</ordering>
			<value>can_access_groups</value>
		</setting>
		<setting>
			<is_admin_setting>0</is_admin_setting>
			<module_id>group</module_id>
			<type>boolean</type>
			<admin>1</admin>
			<user>1</user>
			<guest>0</guest>
			<staff>1</staff>
			<module>group</module>
			<ordering>0</ordering>
			<value>can_create_group</value>
		</setting>
		<setting>
			<is_admin_setting>0</is_admin_setting>
			<module_id>group</module_id>
			<type>boolean</type>
			<admin>1</admin>
			<user>0</user>
			<guest>0</guest>
			<staff>1</staff>
			<module>group</module>
			<ordering>0</ordering>
			<value>can_view_secret_group</value>
		</setting>
	</user_group_settings>
	<hooks>
		<hook>
			<module_id>group</module_id>
			<hook_type>service</hook_type>
			<module>group</module>
			<call_name>group.service_process_add__end</call_name>
			<added>1260366442</added>
			<version_id>2.0.0rc11</version_id>
			<value />
		</hook>
	</hooks>
	<update_templates>
		<file type="controller">index.html.php</file>
		<file type="block">menu.html.php</file>
		<file type="block">list.html.php</file>
	</update_templates>
</upgrade>