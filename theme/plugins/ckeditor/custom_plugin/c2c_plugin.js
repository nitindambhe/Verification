// Add custom drop down for CKEDITOR
CKEDITOR.plugins.add('macros', {
    requires: ['richcombo'],
    init: function (editor)
    {
        var config = editor.config,
                lang = editor.lang.format;

        // Gets the list of tags from the settings.
        var tags = [];
        // this.add('value', 'drop_text', 'drop_label');
        tags.push([
            "{{company_name}}",
            "Company Name",
            "Company Name"
        ]);
        tags.push([
            "{{company_logo}}",
            "Company Logo",
            "Company Logo"
        ]);
        tags.push([
            "{{student_first_name}}",
            "Student First Name",
            "Student First Name"
        ]);
        tags.push([
            "{{student_last_name}}",
            "Student Last Name",
            "Student Last Name"
        ]);
        tags.push([
            "{{profile_name}}",
            "Profile Name",
            "Profile Name"
        ]);
        tags.push([
            "{{password}}",
            "Password",
            "Password"
        ]);
        tags.push([
            "{{user_name}}",
            "User Name",
            "User Name"
        ]);
        tags.push([
            "{{test_time}}",
            "Test Time",
            "Test Time"
        ]);

        // Create style objects for all defined styles.
        editor.ui.addRichCombo('macros', {
            label: "Macros",
            title: "Macros",
            voiceLabel: "Macros",
            className: 'cke_format',
            multiSelect: false,
            panel:
                    {
                        css: [config.contentsCss, CKEDITOR.getUrl('skins/moono/editor.css')],
                        voiceLabel: lang.panelVoiceLabel
                    },
            init: function ()
            {
                this.startGroup("Macros");
                // this.add('value', 'drop_text', 'drop_label');
                for (var this_tag in tags) {
                    this.add(
                            tags[this_tag][0],
                            tags[this_tag][1],
                            tags[this_tag][2]
                            );
                }
            },
            onClick: function (value)
            {
                editor.focus();
                editor.fire('saveSnapshot');
                editor.insertHtml(value);
                editor.fire('saveSnapshot');
            }
        });
    }
});