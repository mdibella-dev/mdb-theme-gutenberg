


// --------------------- MASONRY



const masonry = document.querySelector( '.masonry' );

function doMasonry( masonry ) {
    let items = masonry.childElementCount;

    if ( items ) {

        const column_count     = getComputedStyle( masonry ).getPropertyValue( '--column-count' );
        const column_gap       = parseInt( getComputedStyle( masonry ).getPropertyValue( '--column-gap' ) );
        const items_per_column = Math.ceil( items / column_count );

        let   heights          = [];    // Field with the heights of the respective columns
        let   height           = 0;     // The calculated total height of the current column
        let   count            = 0;     // The number of items in the current column

        // Run through all child elements
        for ( const item of masonry.children ) {
            height += item.clientHeight + column_gap;
            items  -= 1;

            // 1. Has the maximum number of items in a column been reached?
            // 2. Have all items been processed?
            if ( ( count >= ( items_per_column - 1 ) ) || ( items == 0 ) ) {
                heights.push( height );
                height = 0;
                count  = 0;
            } else {
                count++;
            }
        }

        // Sort the heights in descending order
        heights.sort( (a,b) => b-a );

        // Set the new height
        masonry.style.height = heights[0] + 'px';
    }
}


doMasonry( masonry );
