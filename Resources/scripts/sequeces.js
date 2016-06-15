
if (Phlexible.tasks !== undefined && Phlexible.User.isGranted('ROLE_ELEMENT_TASKS')) {
    this.extendedMenuIndex.add('task_sep', '-');
    this.extendedMenuIndex.add('task', {
        text: Phlexible.tasks.Strings.new_task,
        iconCls: 'p-task-component-icon',
        disabled: true,
        handler: function () {
            var payload = {
                tid: this.element.tid
                //language: this.element.language
            };

            if (this.element.teaser_id) {
                payload.teaser_id = this.element.teaser_id;
            }

            var w = new Phlexible.elements.NewTaskWindow({
                payload: payload,
                component_filter: 'elements',
                listeners: {
                    create: function () {
                        this.element.reload({
                            unlock: this.element.eid
                        });
                    },
                    scope: this
                }
            });

            w.show();
        },
        scope: this
    });
}
