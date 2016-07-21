Ext.require('Phlexible.elements.TopToolbar');
Ext.require('Phlexible.elementtask.NewElementTaskWindow');

Phlexible.elements.TopToolbar.prototype.populateExtendedMenu =
    Phlexible.elements.TopToolbar.prototype.populateExtendedMenu.createSequence(function() {
        if (Phlexible.User.isGranted('ROLE_ELEMENT_TASKS')) {
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

                    var w = new Phlexible.elementtask.NewElementTaskWindow({
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

            this.element.on({
                getlock: function() {
                    // onGetLock
                    // task button
                    if (Phlexible.User.isGranted('ROLE_ELEMENT_TASKS') && this.extendedMenuIndex.indexOfKey('task') !== -1) {
                        var extendedItem = this.items.items[this.tbarIndex.indexOfKey('extended')];
                        extendedItem.menu.items.items[this.extendedMenuIndex.indexOfKey('task')].enable();
                    }
                },
                islocked: function() {
                    // onIsLocked
                    // task button
                    if (Phlexible.User.isGranted('ROLE_ELEMENT_TASKS') && this.extendedMenuIndex.indexOfKey('task') !== -1) {
                        var extendedItem = this.items.items[this.tbarIndex.indexOfKey('extended')];
                        extendedItem.menu.items.items[this.extendedMenuIndex.indexOfKey('task')].disable();
                    }
                },
                removelock: function() {
                    // onRemoveLock
                    // task button
                    if (Phlexible.User.isGranted('ROLE_ELEMENT_TASKS') && this.extendedMenuIndex.indexOfKey('task') !== -1) {
                        var extendedItem = this.items.items[this.tbarIndex.indexOfKey('extended')];
                        extendedItem.menu.items.items[this.extendedMenuIndex.indexOfKey('task')].disable();
                    }
                },
                scope: this
            });
        }
    });


/*
 {
 xtype: 'elements-taskbar',
 element: this.element,
 region: 'north',
 height: 26,
 hidden: true,
 listeners: {
 newStatus: {
 fn: function() {
 this.element.reload({
 lock: 0,
 unlock: this.element.eid
 });
 },
 scope: this
 }
 }


 */
