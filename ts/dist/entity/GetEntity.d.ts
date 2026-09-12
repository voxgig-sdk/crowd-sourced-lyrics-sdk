import { CrowdSourcedLyricsEntityBase } from '../CrowdSourcedLyricsEntityBase';
import type { CrowdSourcedLyricsSDK } from '../CrowdSourcedLyricsSDK';
import type { Control } from '../types';
import type { Get, GetLoadMatch } from '../CrowdSourcedLyricsTypes';
declare class GetEntity extends CrowdSourcedLyricsEntityBase<Get> {
    constructor(client: CrowdSourcedLyricsSDK, entopts: any);
    make(this: GetEntity): GetEntity;
    load(this: any, reqmatch?: GetLoadMatch, ctrl?: Control): Promise<GetEntity>;
}
export { GetEntity };
