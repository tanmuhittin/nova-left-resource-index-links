import ResourceTableRow from './components/ResourceTableRow'
import ResourceTable from './components/ResourceTable'

Nova.booting((Vue, router) => {
    Vue.component('resource-table-row', ResourceTableRow);
    Vue.component('resource-table', ResourceTable);
});
