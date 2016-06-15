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



    // onGetLock
    // task button
    if (this.extendedMenuIndex.indexOfKey('task') !== -1) {
        var extendedItem = this.items.items[this.tbarIndex.indexOfKey('extended')];
        extendedItem.menu.items.items[this.extendedMenuIndex.indexOfKey('task')].enable();
    }

    // onIsLocked
    // task button
    if (this.extendedMenuIndex.indexOfKey('task') !== -1) {
        var extendedItem = this.items.items[this.tbarIndex.indexOfKey('extended')];
        extendedItem.menu.items.items[this.extendedMenuIndex.indexOfKey('task')].disable();
    }

    // onRemoveLock
    // task button
    if (this.extendedMenuIndex.indexOfKey('task') !== -1) {
        var extendedItem = this.items.items[this.tbarIndex.indexOfKey('extended')];
        extendedItem.menu.items.items[this.extendedMenuIndex.indexOfKey('task')].disable();
    }
